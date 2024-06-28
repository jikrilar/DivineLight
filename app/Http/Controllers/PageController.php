<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use App\Models\Report;
use App\Models\User;
use App\Models\PowerConsumption;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'powerconsumption' => PowerConsumption::find(1)
        ]);
    }

    public function dashboard()
    {
        return view('dashboard', [
            'total_societies' => User::where('role', 'society')->count(),
            'total_technicians' => User::where('role', 'technician')->count(),
            'total_reports' => Report::count(),
            'total_repairs' => Repair::count()
        ]);
    }
}
