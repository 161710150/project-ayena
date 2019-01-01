<?php

namespace App\Http\Controllers;

use Alert;
use File;
use App\Kategori;
use App\Produk;
use App\Size;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index',compact('produk'));
    }

    public function daftar()
    {
        $daftar = Produk::all();
        return view('produk.daftar',compact('daftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Nama_Pakaian' => 'required',
            'Spesifikasi_Pakaian' => 'required',
            'Harga_Sewa' => 'required',
            'Foto' => 'required',
            'id_kategori' => 'required',
        ]);
        Alert::success('Data Successfully Saved','Good Job!')->autoclose(1700);
        $produk = new Produk;

        $produk->Nama_Pakaian = $request->Nama_Pakaian;
        $produk->Spesifikasi_Pakaian = $request->Spesifikasi_Pakaian;
        $produk->Harga_Sewa = $request->Harga_Sewa;
        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $produk->Foto = $filename;
        };
        $produk->Status = $request->Status;
        $produk->id_kategori = $request->id_kategori;
        $produk->save();

        $count_man=count($request->Nama);
        for($id = 0; $id < $count_man; $id++){
            $size = new Size;
            $size->id_produk = $produk->id;
            $size->Nama = $request->Nama[$id];
            $size->Stok = $request->Stok[$id];
            $size->save();
        }
        return redirect()->route('produkpakaian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show',compact('produk'));
    }

    public function detail($id)
    {
        $detail = Produk::findOrFail($id);
        $size = Size::join('produks','produks.id','=','sizes.id_produk')
                ->where('sizes.id_produk', $id)->get();
        // var_dump($detail);die();
        return view('produk.detail',compact('detail','size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = Produk::findOrFail($id);
        $kategori = Kategori::all();
        $kategoriselected = Produk::findOrFail($id)->id_kategori;
        return view('produk.edit',compact('produks','kategori','kategoriselected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Changed','Good Job!')->autoclose(1700);
        $this->validate($request,[
            'Nama_Pakaian' => 'required|max:255',
            'Spesifikasi_Pakaian' => 'required',
            'Harga_Sewa' => 'required',
            'id_kategori' => 'required',
        ]);
        $produk = Produk::findOrFail($id);
        $produk->Nama_Pakaian = $request->Nama_Pakaian;
        $produk->Spesifikasi_Pakaian = $request->Spesifikasi_Pakaian;
        $produk->Harga_Sewa = $request->Harga_Sewa;
        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            if ($produk->Foto){
                $old_Foto = $produk->Foto;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
                . DIRECTORY_SEPARATOR . $produk->Foto;
                try{
                    file::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }
            $produk->Foto = $filename;
        }
        $produk->Status = $request->Status;
        $produk->id_kategori = $request->id_kategori;
        $produk->save();
        return redirect()->route('produkpakaian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data Behasil Dihapus','Good Job!')->autoclose('1500');
        $produkdelete = Produk::findOrFail($id);
        $produkdelete->delete();
        return redirect()->route('produkpakaian.index');
    }
}
