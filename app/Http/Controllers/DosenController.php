<?php

namespace App\Http\Controllers;
use App\Models\dosen;
use App\Models\prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_dosen = dosen::all();
        return view('dosen.index',['list_dosen'=>$list_dosen]);

        $dosen = dosen::with('prodi')->get();

        // Menampilkan data di view
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_prodi = prodi::all();
        $dosen = new dosen();
        return view('dosen.form', ['dosen'=>$dosen, 'list_prodi'=>$list_prodi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'prodi_id' => 'required',
        ]);

        if($request->id){
            dosen::find($request->id)->update($request->all());
            return redirect(route('dosen.index'))->with('pesan', 'Data berhasil diupdate');
        }else {
        dosen::create($request->all());
        return redirect(route('dosen.index'))->with('pesan', 'Data berhasil disimpan');
        }
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
        $dosen = dosen::find($id);
        $list_prodi = prodi::all();
        return view('dosen.form', ['dosen'=>$dosen, 'list_prodi'=>$list_prodi]);
    }

    public function view($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.view', ['dosen' => $dosen]);

        
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
        dosen::find($id)->delete();
        return redirect(route('dosen.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
