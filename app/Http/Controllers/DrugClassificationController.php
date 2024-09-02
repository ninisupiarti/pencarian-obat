<?php

namespace App\Http\Controllers;

use App\Models\DrugClassification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Lang;

class DrugClassificationController extends Controller
{
    function index()
    {
        $data['title'] = Lang::get('admin/drug-class.title');
        $data['drugClassifications'] = DrugClassification::orderBy('id', 'desc')->get();

        return view('admin.klasifikasi-obat.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = Lang::get('admin/drug-class.title');
        $data['drugClass'] = DrugClassification::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.klasifikasi-obat.detail', $data);
    }

    function create()
    {
        $data['title'] = Lang::get('admin/drug-class.title');

        return view('admin.klasifikasi-obat.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = Lang::get('admin/drug-class.title');
        $data['drugClass'] = DrugClassification::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.klasifikasi-obat.form', $data);
    }

    function check(Request $request)
    {
        $data = DrugClassification::findOrFail($request->id);
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
                'name' => 'required|unique:drug_classifications,name,' . $request->id . ',id',
            ],
            (App::getLocale() == 'id') ? [
                'name.required' => 'Kolom Nama Wajib Diisi.',
                'name.unique' => 'Nama Sudah Ada Sebelumnya.',
            ] : [
                'name.required' => 'The Name Field is Required',
                'name.unique' => 'Name Has Already Been Taken.',
            ],
        );

        $image = $request->hidden_image;
        if ($request->file('image')) {
            $path = 'public/drug-class-images/';
            $file = $request->file('image');
            $file_name = $request->name . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $image = "storage/drug-class-images/" . $file_name;
        }

        $data = DrugClassification::updateOrCreate([
            'id' => $request->id,
        ], [
            'image' => $image,
            'name' => $request->name,
        ]);

        if ($request->id == $data->id) {
            return redirect('drug-classifications')->with([
                'message' => __('responses.data.updated.message') . "\t" . __('responses.data.updated.caption'),
            ]);
        } else {
            return redirect('drug-classifications')->with([
                'message' => __('responses.data.created.message') . "\t" . __('responses.data.created.caption'),
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = DrugClassification::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => __('responses.data.destroyed.message') . "\t" . __('responses.data.destroyed.caption'),
        ]);
    }
}
