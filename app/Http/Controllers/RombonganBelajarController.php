<?php

namespace App\Http\Controllers;

use App\Models\rombonganBelajar;
use App\Models\dosen;
use Illuminate\Http\Request;

class RombonganBelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rombongan_belajar = RombonganBelajar::with('dosen')->get();
        return view('rombongan_belajar.index', compact('rombongan_belajar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_dosen = Dosen::all();
        $rombongan_belajar = new RombonganBelajar();
        return view('rombongan_belajar.form', ['rombongan_belajar' => $rombongan_belajar, 'list_dosen' => $list_dosen]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'thn_masuk' => 'required',
            'dosen_pa' => 'required',
        ]);

        if ($request->id) {
            RombonganBelajar::find($request->id)->update($request->all());
            return redirect(route('rombongan_belajar.index'))->with('pesan', 'Data berhasil diupdate');
        } else {
            RombonganBelajar::create($request->all());
            return redirect(route('rombongan_belajar.index'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implement show functionality if needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rombongan_belajar = RombonganBelajar::find($id);
        $list_dosen = Dosen::all();
        return view('rombongan_belajar.form', ['rombongan_belajar' => $rombongan_belajar, 'list_dosen' => $list_dosen]);
    }

    public function view($id)
    {
        $rombongan_belajar = RombonganBelajar::find($id);
        return view('rombongan_belajar.view', ['rombongan_belajar' => $rombongan_belajar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implement update functionality if needed
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RombonganBelajar::find($id)->delete();
        return redirect(route('rombongan_belajar.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
