<?php

namespace App\Http\Controllers;

use App\Models\Lamp;
use App\Models\Report;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            $reports = Report::all();
        } else {
            $reports = Report::where('society_id', auth()->user()->id)->get();
        }

        return view('report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('report.create', [
            'lamps' => Lamp::where('status', 'operate')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'lamp_id' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('report-images');
        }

        $data['reporting_date'] = date('Y-m-d');

        $data['society_id'] = auth()->user()->id;

        Report::create($data);

        Alert::success('Berhasil!', 'Laporan Telah Disubmit, Menunggu Diproses Oleh Pihak Terkait');
        return redirect()->route('report.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
