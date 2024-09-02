<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class ProfileController extends Controller
{
    function profile()
    {
        $data['title'] = Lang::get('admin/profile.title');
        $data['user'] = Auth::user();

        return view('admin.profile', $data);
    }

    function editProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => $request->password ? 'min:8' : 'nullable',
            'password_confirmation' => $request->password ? 'required|min:8|same:password' : 'nullable',
        ]);

        $user = Admin::findOrFail($request->id);
        $user->name = $request->name;
        if ($request->password && $request->password == $request->password_confirmation) {
            $user->password = bcrypt($request->password);
        }
        $user->update();

        return back()->with([
            'message' => __('responses.data.updated.message') . "\t" . __('responses.data.updated.caption'),
        ]);
    }
}
