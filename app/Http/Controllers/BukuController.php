<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penulis;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::paginate(6);

        return view('/buku/index',[
            'title'=>'Buku',
            'categories'=>'Semua',
        ],
        compact('bukus')
        );
    }
    public function getById(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $bukus = Buku::where('id', $id)->first();

            if (!$bukus) {
                return response()->json([
                    'message' => 'Buku tidak ditemukan'
                ], 404);
            }
        } else {
            $bukus = Buku::orderBy('tanggal_terbit', 'desc')->get();
        }

        return response()->json($bukus, 200);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penulis = Penulis::all();
        return view('/buku/create',[
            'title'=>'Tambah Buku',
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
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'body'=>'required',
       ]);
       Buku::create($request->all());
       return redirect()->route('buku.index')->with('success','buku berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $buku)
    {
        Buku::destroy($buku);
       return redirect()->route('buku.index')->with('success','hapus buku berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
       $penulis = Penulis::all();
        return view('/buku/edit',[
            'title'=>'Edit Buku',
            'penulis'=>$penulis
        ], compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul'=>'required',
            'penulis_id'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'body'=>'required',
       ]);
       $buku->update($request->all());
        return redirect()->route('buku.index')->with('success','edit buku berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')
            ->with('success','Buku berhasil dihapus');
    }
}
