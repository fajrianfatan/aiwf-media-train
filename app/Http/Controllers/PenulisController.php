<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;
class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penulis = Penulis::all();
        return view('/penulis/index',[
            'title'=>'penulis',
        ],
        compact('penulis')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('/penulis/create',[
            'title'=>'Tambah Penulis',

        ],);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'bidang'=>'required',

       ]);
       Penulis::create($request->all());
       return redirect()->route('penulis.index')->with('success','penulis berhasil di tambahkan');    }

    /**
     * Display the specified resource.
     */
    public function show(string $penulis)
    {
        Penulis::destroy($penulis);
       return redirect()->route('penulis.index')->with('success','hapus penulis berhasil');
    }
    public function getById(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $penulis = Penulis::where('id', $id)->first();

            if (!$penulis) {
                return response()->json([
                    'message' => 'Penulis tidak ditemukan'
                ], 404);
            }
        } else {
            $penulis = Penulis::orderBy('tanggal_terbit', 'desc')->get();
        }

        return response()->json($penulis, 200);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penulis $penulis)
    {
        return view('penulis/edit',[
            'title'=>'Edit penulis',
        ], compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penulis $penulis)
    {
        $request->validate([
            'nama' => 'required',
            'bidang' => 'required',
        ]);

        $penulis->update($request->all());
        return redirect()->route('penulis.index')->with('success', 'Edit penulis berhasil');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
