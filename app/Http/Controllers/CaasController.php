<?php

namespace App\Http\Controllers;

use App\Models\Announcecheck;
use App\Models\Assistantcontact;
use App\Models\Datacaas;
use App\Models\Grouprole;
use App\Models\Message;
use App\Models\Plotting;
use App\Models\Roles;
use App\Models\Shift;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaasController extends Controller
{
    public function index()
    {
        $path = Auth::guard('caas')->user()->role->roles->character_photo;
        $data = [
            'title' => "Explorer's Dashboard",
            'path' => $path
        ];
        return view('caas.index', $data);
    }
    public function announcement()
    {
        $msg = Message::first();
        $data = [
            'title' => "Pengumumman",
            'msg' => $msg
        ];
        return view('caas.announcement', $data);
    }

    public function assistant()
    {
        $ass = Assistantcontact::all();
        $data = [
            'title' => "Kontak Asisten",
            'assistant' => $ass
        ];
        return view('caas.assistant', $data);
    }

    //Schedule functions
    public function viewSchedule()
    {
        if (Auth::guard('caas')->user()->status->isPass == 0 || Auth::guard('caas')->user()->announcecheck()->isPlotActive == 0) {
            return redirect()->route('caas.dashboard');
        } elseif (boolval(Auth::guard('caas')->user()->plots) == 1) {
            return redirect()->route('caas.fix.schedule');
        }
        $shifts = Shift::orderBy('day', 'asc')->orderBy('start_hour', 'asc')->paginate(5);
        $data = [
            'title' => "Daftar Jadwal",
            'schedule' => $shifts
        ];
        return view('caas.schedule', $data);
    }

    public function selectSchedule(Request $request)
    {
        $shift = Shift::where('id', $request->id)->first();
        $day = Carbon::parse($shift->day)->locale('id')->translatedFormat('l d M');
        //kalo ada yg iseng masuk lewat link
        if ($shift->quota <= 0 || Auth::guard('caas')->user()->announcecheck()->isPlotActive == 0) {
            return redirect()->route('caas.schedule');
        }
        $data = [
            'title' => "Konfirmasi Jadwal",
            'schedule' => $shift,
            'day' => $day
        ];
        return view('caas.confirmschedule', $data);
    }
    public function saveSchedule(Request $request)
    {
        $selectedShift = Shift::find($request->id);
        $quota = $selectedShift->quota - 1;
        Plotting::create([
            'shift_id' => $selectedShift->id,
            'caas_id' => Auth::guard('caas')->user()->id,
            'isPlotActive' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Shift::where('id', $request->id)->update([
            'quota' => $quota
        ]);
        return redirect()->route('caas.fix.schedule');
    }
    public function fixSchedule()
    {
        // dd(boolval(Auth::guard('caas')->user()->plots));
        if (boolval(Auth::guard('caas')->user()->plots) == 0) {
            return redirect()->route('caas.schedule');
        }
        $sday = Auth::guard('caas')->user()->plots->shifts->day;
        $stime = Auth::guard('caas')->user()->plots->shifts->start_hour;
        $etime = Auth::guard('caas')->user()->plots->shifts->end_hour;
        $day = Carbon::parse($sday)->locale('id')->translatedFormat('l');
        $date = Carbon::parse($sday)->locale('id')->translatedFormat('d M, Y');
        $time = substr($stime, 0, -3) . " - " . substr($etime, 0, -3);
        $data = [
            'title' => "Jadwal Terpilih",
            'day' => $day,
            'date' => $date,
            'time' => $time
        ];
        return view('caas.fixschedule', $data);
    }


    //Role functions
    public function viewRole()
    {
        //just validasi kalo ada yg iseng
        if (Auth::guard('caas')->user()->status->isPass == 0 || Auth::guard('caas')->user()->role->roles_id != 1 || Auth::guard('caas')->user()->announcecheck()->isRoleActive == 0) {
            return redirect()->route('caas.fix.role');
        }
        $roles = Roles::all()->except(1);
        $data = [
            'title' => "Pilih Role",
            'roles' => $roles
        ];
        return view('caas.chooserole', $data);
    }
    public function selectRole(Request $request)
    {
        $role = Roles::where('id', $request->id)->first();
        //kalo ada yg iseng masuk lewat link
        if ($role->quota <= 0) {
            return redirect()->route('caas.schedule');
        }
        $data = [
            'title' => "Konfirmasi Role",
            'role' => $role,
        ];
        return view('caas.confirmrole', $data);
    }

    public function saveRole(Request $request)
    {
        $selectedRole = Roles::find($request->id);
        $quota = $selectedRole->quota - 1;
        Roles::where('id', $request->id)->update([
            'quota' => $quota
        ]);
        Grouprole::where('caas_id', Auth::guard('caas')->user()->id)->update([
            'roles_id' => $selectedRole->id,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('caas.fix.role');
    }

    public function fixRole()
    {
        if (Auth::guard('caas')->user()->role->roles_id == 1 || Auth::guard('caas')->user()->status->isPass == 0 || Auth::guard('caas')->user()->status->stages->stagesName != "Upgrading") {
            return redirect()->route('caas.dashboard');
        }
        $data = [
            'title' => "Role Kamu",
        ];
        return view('caas.fixrole', $data);
    }
}
