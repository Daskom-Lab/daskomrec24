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


    public function changePassword(Request $request)
    {
        $id = Auth::id();
        $caas = Datacaas::find($id);

        // Validasi
        $rules = [
            'old_password' => 'required|password',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        ];

        $messages = [
            'old_password.password' => 'Old password is incorrect.',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ];

        $this->validate($request, $rules, $messages);

        // Verifikasi password lama
        if (!Hash::check($request->old_password, $caas->password)) {
            return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect.']);
        }

        // Update password baru
        $caas->password = Hash::make($request->password);
        $caas->save();

        // Logout dengan aman
        Auth::guard('Datacaas')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with(['changed' => 'Password successfully changed']);
    }

    public function logout()
    {
        Auth::guard('caas')->logout();
        return redirect(route('caas.login'));
    }
}
