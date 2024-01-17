<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use App\Models\Status;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Announcecheck;
use App\Models\Plotting;
use App\Models\Shift;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = Message::first();
        $stages = Stage::all();
        // dd(Auth::guard('admin')->user()->stages()->id);
        $data = [
            'title' => 'Admin Dashboard',
            'message' => $message,
            'stages' => $stages,
        ];
        return view('admin.dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setStatus(Request $request)
    {
        $isMessageActive = $request->isMessageActive == NULL ? 0 : 1;
        $isPlotActive = $request->isPlotActive == NULL ? 0 : 1;
        // if($isMessageActive == 1 && $isPlotActive == 1){
        //     $isMessageActive = 1;
        //     $isPlotActive = 0;
        // }
        // dd($request->id);
        Stage::where('isActive', 1)->update([
            'isActive' => 0
        ]);
        Stage::where('id', $request->id)->update([
            'isActive' => 1
        ]);
        Announcecheck::where('id', 1)->update([
            'isMessageActive' => $isMessageActive,
            'isPlotActive' => $isPlotActive,
        ]);
        Status::where('isPass', 1)->update([
            'stages_id' => $request->id
        ]);
        return redirect()->route('admin.dashboard')->with('status', 'Status updated successfully!');
    }


    public function setMsg(Request $request)
    {
        $validate = $request->validate([
            'pass_msg' => 'required',
            'failed_msg' => 'required',
            'link' => 'required',
        ]);

        Message::where('id', 1)->update([
            'pass_msg' => $request->pass_msg,
            'failed_msg' => $request->failed_msg,
            'link' => $request->link,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.dashboard')->with('status', 'Announcement updated successfully!');
    }

    public function resetShift()
    {
        $shift = Shift::whereNotNull('id')->delete();
        $plot = Plotting::whereNotNull('id')->delete();
        return redirect()->route('admin.shifts')->with('status', 'Shift data reset successfully!');
    }

    public function resetPlot()
    {
        Plotting::truncate();
        return redirect()->route('admin.plots')->with('status', 'Plots data reset successfully!');
    }

    
}
