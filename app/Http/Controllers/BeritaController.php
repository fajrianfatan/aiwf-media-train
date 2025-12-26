<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Penulis;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::orderBy('tanggal_terbit', 'desc')->get();
        return view('/berita/index',[
            'title'=>'Berita',
        ],
        compact('beritas')
        );
    }
    public function getById(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $beritas = Berita::where('id', $id)->first();

            if (!$beritas) {
                return response()->json([
                    'message' => 'Berita tidak ditemukan'
                ], 404);
            }
        } else {
            $beritas = Berita::orderBy('tanggal_terbit', 'desc')->get();
        }

        return response()->json($beritas, 200);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penulis = Penulis::all();
        return view('/berita/create',[
            'title'=>'Tambah Berita',
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
       Berita::create($request->all());
       return redirect()->route('berita.index')->with('success','berita berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $berita)
    {
        berita::destroy($berita);
       return redirect()->route('berita.index')->with('success','hapus berita berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        $penulis = Penulis::all();
        return view('berita/edit',[
            'title'=>'Edit Berita',
            'penulis'=>$penulis

        ], compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
             'judul'=>'required',
            'penulis_id'=>'required',
            'kategori'=>'required',
            'tanggal_terbit'=>'required',
            'body'=>'required',
        ]);

        $berita->update($request->all());

        return redirect()->route('berita.index')->with('success', 'Edit berita berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
