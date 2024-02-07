<?php

namespace App\Http\Controllers;

use App\Models\Announcecheck;
use App\Models\Datacaas;
use App\Models\Grouprole;
use App\Models\Message;
use App\Models\Plotting;
use App\Models\Roles;
use App\Models\Shift;
use App\Models\Status;
use Illuminate\Http\Request;

class CaasController extends Controller
{
    public function index()
    {
        $profile = Datacaas::all();
        $data = [
            'title' => "Caas Dashboard",
            'profile' => $profile,
        ];
        return view('caas.dashboard', $data);
    }
    public function checkStatus()
    {
        $status = Status::first();
        return view('status.dashboard', ['status' => $status]);
    }
    public function viewSchedule()
    {
        $shifts = Shift::all();
        return view('shift.caas', compact('shifts'));
    }
    public function selectSchedule(Request $request)
    {
        $request->validate([
            'shift' => 'required|exists:shifts,id',
        ]);
        $selectedShift = Shift::find($request->shift);
        $plotting = new Plotting([
            'shift_id' => $selectedShift->id,
        ]);
        auth()->user()->datacaas()->plots()->save($plotting);
        return redirect()->route('shift.dipilih')->with('success', 'Shift berhasil dipilih!');
    }
    public function fixSchedule()
    {
        $selectedShift = auth()->user()->datacaas->plots->shift;
        return view('shift.dipilih', compact('selectedShift'));
    }
    public function viewRole()
    {
        $selectRoles = Grouprole::all();
        return view('roles.caas', compact('selectRoles'));
    }
    public function selectRole(Request $request)
    {
        $request->validate([
            'role' => 'required|exists:grouproles,id',
        ]);
        $selectedRole = Grouprole::find($request->role);
        // Simpan pemilihan role ke dalam tabel roles
        $user = auth()->user();
        $user->roles()->create([
            'roleName' => $selectedRole->roleName,
            'desc' => $selectedRole->desc,
        ]);
        return redirect()->route('role.dipilih')->with('success', 'Role berhasil dipilih!');
    }
}
