<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuCategories;
// use App\Models\Penulis;
class BukuCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukuCategories = BukuCategories::orderBy('title', 'desc')->get();
        return view('/kategori-buku/index',[
            'title'=>'bukuCategories',
        ],
        compact('bukuCategories')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $penulis = Penulis::all();
        return view('/kategori-buku/create',[
            'title'=>'Tambah BukuCategories',

        ],);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'text_color'=>'required',
            'bg_color'=>'required',

       ]);
       BukuCategories::create($request->all());
       return redirect()->route('kategori-buku.index')->with('success','bukuCategories berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $bukuCategories)
    {
        bukuCategories::destroy($bukuCategories);
       return redirect()->route('kategori-buku.index')->with('success','hapus BukuCategories berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuCategories $bukuCategories)
    {

        return view('/bukuCategories/edit',[
            'title'=>'Edit BukuCategories',


        ], compact('bukuCategories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuCategories $bukuCategories)
    {
        $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'text_color'=>'required',
            'bg_color'=>'required',
       ]);
       $bukuCategories->update($request->all());
        return redirect()->route('kategori-buku.index')->with('success','edit bukuCategories berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
