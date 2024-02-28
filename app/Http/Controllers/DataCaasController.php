<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Stage;
use App\Models\Status;
use App\Models\Datacaas;
use App\Models\Grouprole;
use App\Imports\CaasImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

//punya admin 
class DataCaasController extends Controller
{
    public function index()
    {
        $caas = Datacaas::all();
        $roles = Roles::all();
        $stages = Stage::all();
        $total = Status::total();
        $pass = Status::ispass();
        $failed = Status::isfailed();
        $data = [
            'title' => 'Data Caas',
            'caas' => $caas,
            'roles' => $roles,
            'stages' => $stages,
            'total' => $total,
            'pass' => $pass,
            'failed' => $failed
        ];
        return view('admin.caasList', $data);
    }

    public function create(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'nim' => 'required|max:16|unique:datacaas,nim',
            'major' => 'required',
            'email' => 'required',
            'class' => 'required',
            'password' => 'required',
            'roles_id' => 'required',
            'stages_id' => 'required',
            'isPass' => 'required',
        ]);
        $caas = Datacaas::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'nim' => $request->nim,
            'class' => $request->class,
            'major' => $request->major,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Status::create([
            'caas_id' => $caas,
            'stages_id' => $request->stages_id,
            'isPass' => $request->isPass,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Grouprole::create([
            'caas_id' => $caas,
            'roles_id' => $request->roles_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('admin.datacaas')->with('success', 'Data Caas Added');
    }
    public function storeImport(Request $request)
    {
        $file = $request->file('data');
        Excel::import(new CaasImport, $file);
        return back()->with('success', 'Data Imported successfully. gak bahaya tah');
    }
    public function setCaas(Request $request)
    {
        $validate = $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);
        $set = Datacaas::where('nim', $request->nim)->first();
        if ($set == null) {
            return redirect()->route('admin.datacaas')->with('error', 'NIM Tidak Terdaftar');
        } else {
            $set->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('admin.datacaas')->with('success', 'Password ' . $request->nim . ' Updated');
        }
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'nim' => 'required|max:16|unique:datacaas,nim,' . $id . ',id',
            'major' => 'required',
            'email' => 'required',
            'class' => 'required',
            'roles_id' => 'required',
            'stages_id' => 'required',
            'isPass' => 'required',
        ]);

        //cek kuota
        if ($request->oldRoleId != $request->roles_id) {
            $selected_role = Roles::where('id', '=', $request->roles_id)->first();
            $remain = $selected_role->quota - 1;
            if ($remain < 0) {
                return redirect()->route('admin.datacaas')->with('error', 'Quota Tidak Cukup');
            }
            Roles::where('id', '=', $request->roles_id)->update([
                'quota' => $remain,
                'updated_at' => now(),
            ]);
            Roles::where('id', '=', $request->oldRoleId)->update([
                'quota' => $request->oldRoleQuota + 1,
                'updated_at' => now(),
            ]);
        }

        $tes = Datacaas::where('id', '=', $id)->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'email' => $request->email,
            'class' => $request->class,
            'updated_at' => now(),
        ]);
        Status::where('caas_id', '=', $id)->update([
            'stages_id' => $request->stages_id,
            'isPass' => $request->isPass,
            'updated_at' => now(),
        ]);
        Grouprole::where('caas_id', '=', $id)->update([
            'roles_id' => $request->roles_id,
            'updated_at' => now(),
        ]);
        return redirect()->route('admin.datacaas')->with('success', 'Data Caas Updated');
    }

    public function destroy($id)
    {
        $caas = Datacaas::find($id);
        $caas->delete();
        return redirect()->route('admin.datacaas')->with('success', 'Data Caas Deleted');
    }
}
