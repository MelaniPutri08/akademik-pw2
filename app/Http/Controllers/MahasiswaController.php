<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\RombonganBelajar;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['prodi', 'rombonganBelajar'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function home()
    {
        $mahasiswa = Mahasiswa::with(['prodi', 'rombonganBelajar'])->get();
        return view('mahasiswa.home', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_prodi = Prodi::all();
        $listRombonganBelajar = RombonganBelajar::all();
        $mahasiswa = new Mahasiswa();
        return view('mahasiswa.form', ['mahasiswa' => $mahasiswa, 'list_prodi' => $list_prodi, 'listRombonganBelajar' => $listRombonganBelajar]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'ipk' => 'required',
            'prodi_id' => 'required',
            'rombel_id' => 'required',
        ]);

        if ($request->id) {
            Mahasiswa::find($request->id)->update($request->all());
            return redirect(route('mahasiswa.index'))->with('pesan', 'Data berhasil diupdate');
        } else {
            Mahasiswa::create($request->all());
            return redirect(route('mahasiswa.index'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $listRombonganBelajar = RombonganBelajar::all();
        $list_prodi = Prodi::all();
        return view('mahasiswa.form', ['mahasiswa' => $mahasiswa, 'list_prodi' => $list_prodi, 'listRombonganBelajar' => $listRombonganBelajar]);
    }

    public function view($id)
    {
        $mahasiswa = Mahasiswa::with(['prodi', 'rombonganBelajar'])->find($id);
        return view('mahasiswa.view', compact('mahasiswa'));
    }

    public function detail($id)
    {
        $mahasiswa = Mahasiswa::with(['prodi', 'rombonganBelajar'])->find($id);
        return view('mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implementasi jika diperlukan
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::find($id)->delete();
        return redirect(route('mahasiswa.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
