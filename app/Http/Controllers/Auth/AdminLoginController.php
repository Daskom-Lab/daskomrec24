<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class AdminLoginController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'ascode' => ['required'],
            'password' => ['required']
        ]);
        $model = Admin::query()->where('ascod', $request->get('ascode'))->firstOrFail();

        if (!Hash::check($request->get('password'), $model->password)) {
            return back()->with('error', 'Assistant code or Password is Incorect');
        }
        Auth::guard('admin')->login($model);
        return redirect()->to(route('admin.dashboard'));
    }

    public function changePass(Request $request, $id)
    {
        $this->validate($request, [
            'password'  => 'required|min:8|string',
            'confirmPassword'  => 'required|same:password',
        ]);
        Admin::where('id', $id)->update([
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
