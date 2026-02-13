<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Penulis;
class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::orderBy('tanggal_terbit', 'desc')->get();
        return view('/artikel/index',[
            'title'=>'artikel',
        ],
        compact('artikels')
        );
    }

    public function getById(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $artikels = Artikel::where('id', $id)->first();

            if (!$artikels) {
                return response()->json([
                    'message' => 'Artikel tidak ditemukan'
                ], 404);
            }
        } else {
            $artikels = Artikel::orderBy('tanggal_terbit', 'desc')->get();
        }

        return response()->json($artikels, 200);
    }

    public function getByJudul(Request $request)
    {
        $judul = $request->input('judul');

        if (!$judul) {
            return response()->json([
                'message' => 'Parameter judul wajib diisi, gunakan ?judul=kata'
            ], 400);
        }

        $artikels = Artikel::where('judul', 'LIKE', '%' . $judul . '%')
            ->orderBy('tanggal_terbit', 'desc')
            ->get();

        if ($artikels->isEmpty()) {
            return response()->json([
                'message' => 'Artikel dengan judul tersebut tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'cari_judul' => $judul,
            'data' => $artikels
        ], 200);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penulis = Penulis::all();
        return view('/artikel/create',[
            'title'=>'Tambah Artikel',
            'penulis'=>$penulis,
        ],);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'judul'=>'required',
            'penulis_id'=>'required',
            'kategori'=>'required',
            'tanggal_terbit'=>'required',
            'body'=>'required',
       ]);
       Artikel::create($request->all());
    //    return redirect()->route('artikel.index')->with('success','artikel berhasil di tambahkan');
    return redirect()->route('artikel.index'); // after observer

    }

    /**
     * Display the specified resource.
     */
    public function show(string $artikel)
    {
        artikel::destroy($artikel);
       return redirect()->route('artikel.index')->with('success','hapus Artikel berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        $penulis = Penulis::all();
        return view('/artikel/edit',[
            'title'=>'Edit Artikel',
            'penulis'=>$penulis

        ], compact('artikel'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul'=>'required',
            'penulis_id'=>'required',
            'kategori'=>'required',
            'tanggal_terbit'=>'required',
            'body'=>'required',
       ]);
       $artikel->update($request->all());
        return redirect()->route('artikel.index')->with('success','edit artikel berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikel.index')
            ->with('success','Artikel berhasil dihapus');
    }

}
