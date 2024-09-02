<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Lang;

class AdminController extends Controller
{
    function index()
    {
        $data['title'] = Lang::get('admin/administrator.title');
        $data['administrators'] = Admin::orderBy('id', 'desc')->get();

        return view('admin.administrator.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = Lang::get('admin/administrator.title');
        $data['administrator'] = Admin::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.administrator.detail', $data);
    }

    function create()
    {
        $data['title'] = Lang::get('admin/administrator.title');

        return view('admin.administrator.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = Lang::get('admin/administrator.title');
        $data['administrator'] = Admin::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.administrator.form', $data);
    }

    function check(Request $request)
    {
        $data = Admin::findOrFail($request->id);
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
                'name' => 'required',
                'email' => 'required|email|unique:admins,email,' . $request->id . ',id',
                'level' => 'required',
            ],
            (App::getLocale() == 'id') ? [
                'name.required' => 'Kolom Nama Wajib Diisi.',
                'email.required' => 'Kolom Email Wajib Diisi.',
                'email.email' => 'Kolom Email Harus Berupa Alamat Suret Yang Valid.',
                'email.unique' => 'Email Sudah Ada Sebelumnya.',
                'level.required' => 'Kolom Level Wajib Diisi.',
            ] : [
                'name.required' => 'The Name Field is Required',
                'email.required' => 'The Email Field is Required',
                'email.email' => 'The Email Field Must Be A Valid Email Address.',
                'email.unique' => 'Email Has Already Been Taken.',
                'level.required' => 'The Level Field is Required',
            ],
        );

        $photo = $request->hidden_photo;
        if ($request->file('photo')) {
            $path = 'public/admin-photos/';
            $file = $request->file('photo');
            $file_name = $request->email . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $photo = "storage/admin-photos/" . $file_name;
        }

        $data = Admin::updateOrCreate([
            'id' => $request->id,
        ], [
            'photo' => $photo,
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
        ]);

        if ($request->id == $data->id) {
            return redirect('administrators')->with([
                'message' => __('responses.data.updated.message') . "\t" . __('responses.data.updated.caption'),
            ]);
        } else {
            return  redirect('administrators')->with([
                'message' => __('responses.data.created.message') . "\t" . __('responses.data.created.caption'),
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Admin::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => __('responses.data.destroyed.message') . "\t" . __('responses.data.destroyed.caption'),
        ]);
    }
}
