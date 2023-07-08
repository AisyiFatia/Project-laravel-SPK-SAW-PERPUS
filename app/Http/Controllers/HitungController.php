<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subkriteria;
use App\Models\kriteria;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.produk.create');
    }

 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama_buku' => 'required',
        //     'tahun_terbit' => 'required',
        // ]);

        // $produk = Produk::create([
        //     'nama_buku' => $request->nama_buku,
        //     'tahun_terbit' => $request->tahun_terbit,
        // ]);

        // return redirect()->to('produk')->with('success','Data Berhasil Disimpan');
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
        // $produk = produk::findorfail($id);
        // return view('admin.produk.edit', compact('produk'));
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
        // $this->validate($request, [
        //     'nama_buku' => 'required',
        //     'tahun_terbit' => 'required',
        // ]);

        // $produk = [
        //     'nama_buku' => $request->nama_buku,
        //     'tahun_terbit' => $request->tahun_terbit,
        // ];
        // produk::whereId($id)->update($produk);

        // return redirect()->route('produk.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $produk = produk::findorfail($id);
        // $produk->delete();

        // return redirect()->back()->with('success','Data Berhasil Dihapus');
    }

    public function hitung(Request $request){

        $kriteria = kriteria::sum('bobot');

        $bobot1 = 0.25/$kriteria;
        $bobot2 = 0.25/$kriteria;
        $bobot3 = 0.15/$kriteria;
        $bobot4 = 0.25/$kriteria;
        $bobot5 = 0.20/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot4,
        ];


        $subkriteria = subkriteria::get();
        $data = subkriteria::orderby('nama', 'asc')->get();

        $minC1 = subkriteria::min('C1');
        $maxC1 = subkriteria::max('C1');
        $minC2 = subkriteria::min('C2');
        $maxC2 = subkriteria::max('C2');
        $minC3 = subkriteria::min('C3');
        $maxC3 = subkriteria::max('C3');
        $minC4 = subkriteria::min('C4');
        $maxC4 = subkriteria::max('C4');

        $C1min =[
            'subkriterias' => $minC1,
        ];
        $C1max =[
            'subkriterias' => $maxC1,
        ];
        $C2min =[
            'subkriterias' => $minC2,
        ];
        $C2max =[
            'subkriterias' => $maxC2,
        ];
        $C3min =[
            'subkriterias' => $minC3,
        ];
        $C3max =[
            'subkriterias' => $maxC3,
        ];
        $C4min =[
            'subkriterias' => $minC4,
        ];
        $C4max =[
            'subkriterias' => $maxC4,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'subkriterias' => $hasil,
        ];

        return view('admin.saw.hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max'));
    }
} 