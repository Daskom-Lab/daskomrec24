<?php

namespace App\Http\Controllers\Auth;

use App\Models\Datacaas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class CaasLoginController extends Controller
{
    public function loginForm()
    {
        return view('caas.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $this->validate($request, [
            'nim'      => 'required|string',
            'password'  => 'required|string'
        ]);

        if (Auth::guard('caas')->attempt([
            'nim' => $request->nim,
            'password' => $request->password
        ], true)) {
            return redirect()->route('caas.dashboard'); // disesuaikan sama nama route
        }
        return redirect()->back()->with(['error' => 'NIM / Password Salah']); // disesuaikan sama nama routenye
    }


    public function changepass(Request $request)
    {
        $id = Auth::id();
        $caas = Datacaas::find($id);
        $rules = [
            'password'    =>    'required|min:8',
        ];

        $messages = [
            'password.required'    =>    'Password must not be blank and at least 8 characters long',
        ];

        $this->validate($request, $rules, $messages);

        Datacaas::where('id', $id)->update([
            'nama' => $caas->nama,
            'nim' => $caas->nim,
            'email' => $caas->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('datacaas')->logout();
        return redirect('login')->with(['changed' => 'Password successfully changed']);
    }

    public function logout()
    {
        Auth::guard('caas')->logout();
        return redirect(route('caas.login'));
    }
}
