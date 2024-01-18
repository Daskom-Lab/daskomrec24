<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\Plotting;
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

}
