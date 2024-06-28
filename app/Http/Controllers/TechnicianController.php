<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technicians = User::where('role', 'technician')->get();
        return view('technician.index', compact('technicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('technician.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mobile_number' => 'required',
            'address' => 'required'
        ]);

        $data['role'] = 'technician';

        User::create($data);

        Alert::success('Berhasil!', 'Data Teknisi Telah Ditambahkan');
        return redirect()->route('technician.index');
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
        return view('technician.edit', [
            'technician' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'address' => 'required'
        ]);

        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        User::find($id)->update($data);

        Alert::success('Berhasil!', 'Data Teknisi Telah Dirubah');
        return redirect()->route('technician.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        Alert::success('Berhasil!', 'Data Teknisi Telah Dihapus');
        return redirect()->route('technician.index')->with('message', 'Berhasil Hapus Data Teknisi');
    }
}
