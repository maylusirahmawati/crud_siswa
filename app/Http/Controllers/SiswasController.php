<?php

namespace App\Http\Controllers;

use App\Models\Siswas;
use Illuminate\Http\Request;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswas.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'umur' => 'required|integer',
            'nilai' => 'required|numeric',
        ]);

        Siswa::created($request->all());
        return redirect()->route('siswas.index')->with('succes', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswas $siswas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswas $siswas)
    {
        return view('siswas.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswas $siswas)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'umur' => 'required|integer',
            'nilai' => 'required|numeric',
        ]);
        
        $siswa->update($request->all());
        return redirect()->route('siswas.index' )->with('success', 'Data berhasil diperbarui' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswas $siswas)
    {
        $siswa->delete();
        return redirect()->route('siswas.index')->with('success', 'Data berhasil dihapus');
    }
}
