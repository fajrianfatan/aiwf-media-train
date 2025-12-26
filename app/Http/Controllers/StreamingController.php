<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Streaming;
use App\Models\Penulis;
class StreamingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $streamings = Streaming::orderBy('updated_at', 'desc')->get();
        return view('/streaming/index',[
            'title'=>'Live Streaming',
        ],
        compact('streamings')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penulis = Penulis::all();
        return view('/streaming/create',[
            'title'=>'Tambah video',
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
            'link'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'body'=>'required',
       ]);
       Streaming::create($request->all());
       return redirect()->route('streaming.index')->with('success','video berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $streaming)
    {
        Streaming::destroy($streaming);
       return redirect()->route('streaming.index')->with('success','hapus video berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Streaming $streaming)
    {
        $penulis = Penulis::all();
        return view('/streaming/edit',[
            'title'=>'Edit Video',
            'penulis'=>$penulis
        ], compact('streaming'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Streaming $streaming)
    {
        $request->validate([
            'judul'=>'required',
            'penulis_id'=>'required',
            'link'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'body'=>'required',
       ]);
       $streaming->update($request->all());
        return redirect()->route('streaming.index')->with('success','edit video berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
