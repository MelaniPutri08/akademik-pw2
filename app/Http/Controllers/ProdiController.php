<?php

namespace App\Http\Controllers;
use App\Models\prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_prodi = prodi::all();
        return view('prodi.index',['list_prodi'=>$list_prodi]);


        // Menampilkan data di view
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = new prodi();
        return view('prodi.form', ['prodi'=>$prodi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        if($request->id){
            prodi::find($request->id)->update($request->all());
            return redirect(route('prodi.index'))->with('pesan', 'Data berhasil diupdate');
        }else {
        prodi::create($request->all());
        return redirect(route('prodi.index'))->with('pesan', 'Data berhasil disimpan');
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
        $prodi = prodi::find($id);
        return view('prodi.form', ['prodi'=>$prodi]);
    }

    public function view($id)
    {
        $prodi = prodi::find($id);
        return view('prodi.view', ['prodi' => $prodi]);

        
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
        prodi::find($id)->delete();
        return redirect(route('prodi.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
