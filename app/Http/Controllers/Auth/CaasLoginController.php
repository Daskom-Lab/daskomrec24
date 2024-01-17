<?php

namespace App\Http\Controllers\Auth;

use App\Models\Datacaas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class CaasLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // return redirect()->to(route('dashboard'));
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

        //kasih konfirmasi sblm updat password
        Auth::guard('caas')->logout();
        return redirect()->route('caas.login');
    }

    public function logout()
    {
        Auth::guard('caas')->logout();
        return redirect(route('caas.login'));
    }


}
