<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;
use App\Http\Requests\StoreShiftRequest;
use App\Http\Requests\UpdateShiftRequest;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all()->sortBy('start_hour')->sortBy('day');
        $data = [
            'title' => 'Shifts',
            'shifts' => $shifts
        ];
        return view('admin.shiftList', $data);
    }
    
    public function create(Request $request)
    {
        $validate = $request->validate([
            'shift_name' => 'required',
            'day' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'quota' => 'required',
        ]);
        Shift::create([
            'shift_name' => $request->shift_name,
            'day' => $request->day,
            'start_hour' => $request->start_hour,
            'end_hour' => $request->end_hour,
            'quota' => $request->quota,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        return redirect()->back()->with('status', 'Shift created successfully!');
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'shift_name' => 'required',
            'day' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'quota' => 'required',
        ]);
        Shift::where('id', $id)->update([
            'shift_name' => $request->shift_name,
            'day' => $request->day,
            'start_hour' => $request->start_hour,
            'end_hour' => $request->end_hour,
            'quota' => $request->quota,
            'updated_at' => now(),
        ]);
        return redirect()->back()->with('status', 'Shift updated successfully!');
    }

    public function destroy($id)
    {
        Shift::where('id', $id)->delete();
        return redirect()->back()->with('status', 'Shift deleted successfully!');
    }
}
