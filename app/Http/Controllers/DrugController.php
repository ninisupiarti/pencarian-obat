<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\DrugClassification;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Lang;

class DrugController extends Controller
{
    function index()
    {
        $data['title'] = Lang::get('admin/drug.title');
        $data['drugs'] = Drug::orderBy('id', 'desc')->get();

        return view('admin.obat.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = Lang::get('admin/drug.title');
        $data['drug'] = Drug::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.obat.detail', $data);
    }

    function create()
    {
        $data['title'] = Lang::get('admin/drug.title');
        $data['drug_classifications'] = DrugClassification::all();
        $data['tags'] = Tag::all();

        return view('admin.obat.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = Lang::get('admin/drug.title');
        $data['drug'] = Drug::where('id', Crypt::decrypt($request->id))->firstOrFail();
        $data['drug_classifications'] = DrugClassification::all();
        $data['tags'] = Tag::all();

        return view('admin.obat.form', $data);
    }

    function check(Request $request)
    {
        $data = Drug::findOrFail($request->id);
        $created_at = Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss');
        $updated_at = Carbon::parse($data->updated_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss');

        return response()->json([
            'data' => $data,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:drugs,name,' . $request->id . ',id',
                'tag' => 'required',
                'drug_classification_id' => 'required',
            ],
            (App::getLocale() == 'id') ? [
                'name.required' => 'Kolom Nama Wajib Diisi.',
                'name.unique' => 'Nama Sudah Ada Sebelumnya.',
                'tag.required' => 'Kolom Tagar Wajib Diisi.',
                'drug_classification_id.required' => 'Golongan Obat Wajib Diisi.',
            ] : [
                'name.required' => 'The Name Field is Required',
                'name.unique' => 'Name Has Already Been Taken.',
                'tag.required' => 'The Tag Field is Required',
                'drug_classification_id.required' => 'The Drug Classification is Required',
            ],
        );

        $image = $request->hidden_image;
        if ($request->file('image')) {
            $path = 'public/drug-images/';
            $file = $request->file('image');
            $file_name = $request->name . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $image = "storage/drug-images/" . $file_name;
        }

        $data = Drug::updateOrCreate([
            'id' => $request->id,
        ], [
            'image' => $image,
            'name' => $request->name,
            'registration_number' => $request->registration_number,
            'composition' => $request->composition,
            'dose' => $request->dose,
            'indication' => $request->indication,
            'description' => $request->description,
            'adverse_drug_reaction' => $request->adverse_drug_reaction,
            'tags' => array_map('intval', $request->tag),
            'drug_classification_id' => $request->drug_classification_id,
        ]);

        if ($request->id == $data->id) {
            return redirect('drugs')->with([
                'message' => __('responses.data.updated.message') . "\t" . __('responses.data.updated.caption'),
            ]);
        } else {
            return redirect('drugs')->with([
                'message' => __('responses.data.created.message') . "\t" . __('responses.data.created.caption'),
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Drug::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => __('responses.data.destroyed.message') . "\t" . __('responses.data.destroyed.caption'),
        ]);
    }
}
