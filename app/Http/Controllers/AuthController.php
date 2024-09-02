<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    function login()
    {
        $data['title'] = Lang::get('admin/auth/login.title');

        return view('admin.auth.login', $data);
    }

    function loginProcess(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ],
            (App::getLocale() == 'id') ? [
                'email.required' => 'Kolom Email Wajib Diisi.',
                'email.email' => 'Kolom Email Harus Berupa Alamat Suret Yang Valid.',
                'password.required' => 'Kolom Kata Sandi Wajib Diisi.',
                'password.min' => 'Kata Sandi Minimal Berisikan 8 Karakter.',
            ] : [
                'email.required' => 'The Email Field is Required',
                'email.email' => 'The Email Field Must Be A Valid Email Address.',
                'password.required' => 'The Password Field is Required',
                'password.min' => 'The Password Field Must Be At Least 8 Characters',
            ],
        );

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard')->with([
                'message' => __('responses.login.success.message'),
            ]);
        } else {
            return  back()->withErrors([
                'message' => __('responses.login.error.message') . "\t" . __('responses.login.error.caption'),
            ]);
        }
    }

    function forgotPassword()
    {
        $data['title'] = Lang::get('admin/auth/forgot-password.title');

        return view('admin.auth.forgot-password', $data);
    }

    function forgotPasswordProcess(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
            ],
            (App::getLocale() == 'id') ? [
                'email.required' => 'Kolom Email Wajib Diisi.',
                'email.email' => 'Kolom Email Harus Berupa Alamat Suret Yang Valid.',
            ] : [
                'email.required' => 'The Email Field is Required',
                'email.email' => 'The Email Field Must Be A Valid Email Address.',
            ],
        );

        $response = Password::sendResetLink(
            $request->only('email')
        );

        if ($response === Password::RESET_LINK_SENT) {
            return  back()->with([
                'message' => __('responses.forgot-password.success.message') . "\t" . __('responses.forgot-password.success.caption'),
            ]);
        } else {
            return back()->withErrors([
                'message' => __('responses.forgot-password.error.message') . "\t" . __('responses.forgot-password.error.caption'),
            ]);
        }
    }

    function resetPassword(Request $request)
    {
        $data['title'] = Lang::get('admin/auth/reset-password.title');
        $data['user'] = Admin::where('email', $request->email)->firstOrFail();
        $data['token'] = $request->token;

        return view('admin.auth.reset-password', $data);
    }

    function resetPasswordProcess(Request $request)
    {
        $request->validate(
            [
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password'
            ],
            (App::getLocale() == 'id') ? [
                'email.required' => 'Kolom Email Wajib Diisi.',
                'email.email' => 'Kolom Email Harus Berupa Alamat Suret Yang Valid.',
                'password.required' => 'Kolom Kata Sandi Wajib Diisi.',
                'password.min' => 'Kata Sandi Minimal Berisikan 8 Karakter.',
                'password_confirmation.required' => 'Kolom Konfirmasi Kata Sandi Wajib Diisi.',
            ] : [
                'email.required' => 'The Email Field is Required',
                'email.email' => 'The Email Field Must Be A Valid Email Address.',
                'password.required' => 'The Password Field is Required',
                'password.min' => 'The Password Field Must Be At Least 8 Characters',
                'password_confirmation.required' => 'The Password Confirmation Field is Required',
            ],
        );

        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (Admin $admin, string $password) {
                $admin->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $admin->save();

                event(new PasswordReset($admin));
            }
        );

        if ($response === Password::PASSWORD_RESET) {
            return redirect('/login')->with([
                'message' => __('responses.reset-password.success.message') . "\t" . __('responses.reset-password.success.caption'),
            ]);
        } else {
            return back()->withErrors([
                'message' => __('responses.reset-password.error.message') . "\t" . __('responses.reset-password.error.caption'),
            ]);
        }
    }

    function logout()
    {
        $data['title'] = Lang::get('admin/auth/logout.title');

        Auth::logout();

        return view('admin.auth.logout', $data);
    }
}
