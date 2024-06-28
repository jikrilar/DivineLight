<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RepairController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            $repairs = Repair::all();
        } else {
            $repairs = Repair::where('technician_id', auth()->user()->id)->get();
        }

        return view('repair.index', compact('repairs'));
    }

    public function create($id)
    {
        return view('repair.create', [
            'report' => Report::find($id),
            'technicians' => User::where('role', 'technician')->get()
        ]);
    }

    public function store(Request $request, $id)
    {
        Repair::create([
            'report_id' => $id,
            'technician_id' => $request->technician_id,
            'status' => 'being_repaired',
        ]);

        $technician_name = User::where('id', $request->technician_id)->get();

        Alert::success('Berhasil!', 'Teknisi ' . $technician_name . ' telah dipilih untuk melakukan perbaikan');
        return redirect()->route('repair.index');
    }

    public function update($id)
    {
        Repair::where('id', $id)->update([
            'status' => 'finished_repaired'
        ]);
    }
}
