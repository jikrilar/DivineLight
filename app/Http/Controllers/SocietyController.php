<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SocietyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('society.index', [
            'societies' => User::where('role', 'society')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('society.create');
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

        $data['role'] = 'society';

        User::create($data);

        Alert::success('Berhasil!', 'Data Masyarakat Telah Ditambahkan');
        return redirect()->route('society.index');
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
        return view('society.edit', [
            'society' => User::find($id)
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

        Alert::success('Berhasil!', 'Data Masyarakat Telah Dirubah');
        return redirect()->route('society.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        Alert::success('Berhasil!', 'Data Masyarakat Telah Dihapus');
        return redirect()->route('society.index');
    }
}
