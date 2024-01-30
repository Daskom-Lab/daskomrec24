<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\Plotting;
use Illuminate\Http\Request;
use App\Http\Requests\StorePlottingRequest;
use App\Http\Requests\UpdatePlottingRequest;

class PlottingController extends Controller
{
    public function index()
    {
        $shifts = Shift::orderBy('day', 'asc')->orderBy('start_hour', 'asc')->get();
        $totalShift = count($shifts);
        $plots = Plotting::all();
        $totalPlot = count($plots);
        $data = [
            'title' => 'Plottingan',
            'shifts' => $shifts,
            'plots' => $plots,
            'totalShift' => $totalShift,
            'totalPlot' => $totalPlot
        ];
        return view('admin.plottingan', $data);
    }
    public function store(Request $request)
    {
        // Validasi data formulir
        $request->validate([
            'shift_id' => 'required|exists:shifts,id',
        ]);

        // Buat instance plotting baru
        $plotting = new Plotting([
            'shift_id' => $request->input('shift_id'),
        ]);

        // Simpan plotting ke database
        $plotting->save();

        return redirect()->route('plotting.index')->with('success', 'Jadwal dipilih dengan sukses');
    }
}
