<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DataAdminController extends Controller
{
    //hidden features
    public function index()
    {
        $admins = Admin::all()->except(Auth::guard('admin')->id());
        $data = [
            'title' => 'Data Admin',
            'admins' => $admins
        ];
        return view('admin.adminList', $data);
    }
    public function create(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'ascode' => 'required|max:3|unique:admins,ascod|exists:assistantcontacts,ascode',
            'password' => 'required|max:12|min:8',
        ]);

        Admin::insert([
            'name' => $request->name,
            'ascod' => $request->ascode,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('admin.admins')->with('success', 'Admin ' . $request->name . ' Created');
    }   
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
        ]);
        Admin::where('id', $id)->update([
            'name' => $request->name,
            'updated_at' => now(),
        ]);
        return redirect()->route('admin.admins')->with('success', 'Admin ' . $request->name . ' Updated');
    }

    public function setAdmin(Request $request)
    {
        $validate = $request->validate([
            'ascode' => 'required',
            'password' => 'required|max:16|min:8',
        ]);
        $set = Admin::where('ascod', $request->ascode)->first();
        if ($set == null) {
            return redirect()->route('admin.admins')->with('error', 'Asisten Tidak Terdaftar');
        } else {
            $set->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('admin.admins')->with('success', 'Password ' . $request->ascode . ' Updated');
        }
    }
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admin.admins')->with('success', 'Admin Deleted');
    }
}
