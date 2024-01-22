<?php

namespace App\Http\Controllers\Auth;

use App\Models\Datacaas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
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
        // Get the current login attempts count from the session
        $loginAttempts = Session::get('login_attempts', 0);

        if (Auth::guard('caas')->attempt([
            'nim' => $request->nim,
            'password' => $request->password
        ], true)) {
            // If login is successful, reset the attempts count
            Session::forget('login_attempts');

            return redirect()->route('caas.dashboard'); // Adjust based on your route name
        }

        // Increment the login attempts count
        $loginAttempts++;
        Session::put('login_attempts', $loginAttempts);

        // Check if the number of attempts exceeds 5
        if ($loginAttempts >= 5) {
            // If exceeded,display a asisten DHI/FYN etc it as needed
            return redirect()->back()->with(['error' => 'NIM / Password Salah - Too many attempts']);
        }

        // If not exceeded, redirect back with the error message
        return redirect()->back()->with(['error' => 'NIM / Password Salah']);
    }


    public function changePass(Request $request)
    {
        $this->validate($request, [
            'password'  => 'required|min:8|string',
            'confirmPassword'  => 'required|same:password',
        ]);
        DataCaas::where('id', Auth::id())->update([
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('caas')->logout();
        return redirect()->route('caas.login');
    }

    public function logout()
    {
        Auth::guard('caas')->logout();
        return redirect(route('caas.login'));
    }

    
    // public function char(){

    // }
}
