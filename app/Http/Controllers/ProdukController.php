<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::orderby('id', 'asc')->get();
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create');
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
            'nama_buku' => 'required',
            'tahun_terbit' => 'required',
        ]);

        $produk = Produk::create([
            'nama_buku' => $request->nama_buku,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        return redirect()->to('produk')->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
 * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = produk::findorfail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_buku' => 'required',
            'tahun_terbit' => 'required',
        ]);

        $produk = [
            'nama_buku' => $request->nama_buku,
            'tahun_terbit' => $request->tahun_terbit,
        ];
        produk::whereId($id)->update($produk);

        return redirect()->route('produk.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::findorfail($id);
        $produk->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}