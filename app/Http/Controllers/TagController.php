<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Lang;

class TagController extends Controller
{
    function index()
    {
        $data['title'] = Lang::get('admin/tag.title');
        $data['tags'] = Tag::orderBy('id', 'desc')->get();

        return view('admin.tagar.index', $data);
    }

    function create()
    {
        $data['title'] = Lang::get('admin/tag.title');

        return view('admin.tagar.form', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = Lang::get('admin/tag.title');
        $data['tag'] = Tag::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.tagar.detail', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = Lang::get('admin/tag.title');
        $data['tag'] = Tag::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.tagar.form', $data);
    }

    function check(Request $request)
    {
        $data = Tag::findOrFail($request->id);

        return response()->json([
            'data' => $data,
        ]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:tags,name,' . $request->id . ',id',
            ],
            (App::getLocale() == 'id') ? [
                'name.required' => 'Kolom Nama Wajib Diisi.',
                'name.unique' => 'Nama Sudah Ada Sebelumnya.',
            ] : [
                'name.required' => 'The Name Field is Required',
                'name.unique' => 'Name Has Already Been Taken.',
            ],
        );

        $data = Tag::updateOrCreate([
            'id' => $request->id,
        ], [
            'name' => $request->name,
        ]);

        if ($request->id == $data->id) {
            return redirect('tags')->with([
                'message' => __('responses.data.updated.message') . "\t" . __('responses.data.updated.caption'),
            ]);
        } else {
            return redirect('tags')->with([
                'message' => __('responses.data.created.message') . "\t" . __('responses.data.created.caption'),
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Tag::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => __('responses.data.destroyed.message') . "\t" . __('responses.data.destroyed.caption'),
        ]);
    }
}
