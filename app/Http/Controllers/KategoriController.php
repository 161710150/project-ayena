<?php

namespace App\Http\Controllers;

use Alert;
use App\Kategori;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Nama' => 'required',
        ],
        [
            'Nama.required' => 'harus diisi',
        ]);
        $data = new Kategori;
        $data->Nama = $request->Nama;

        $data->save();
        Alert::success('Data Successfully Saved','Good Job!')->autoclose(1700);
        return redirect()->route('kategoripakaian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Changed','Good Job!')->autoclose(1700);
        $this->validate($request, [
            'Nama'=>'required',
        ]);
        $kategoriupdates = Kategori::findOrFail($id);
        $kategoriupdates->Nama = $request->Nama;
        $kategoriupdates->save();
        return redirect()->route('kategoripakaian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data Behasil Dihapus','Good Job!')->autoclose('1500');
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategoripakaian.index');
    }
}
