<?php

namespace App\Http\Controllers;

use App\Models\kategori_olahraga;
use App\Models\olahraga;
use Illuminate\Http\Request;

class OlahragaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data olahraga dari database
        // gabungin tablenya
        $Olahraga = Olahraga::join('kategori_olahraga', 'olahraga.kategori_olahraga_id', '=', 'kategori_olahraga.id')
        // tampilin data
            ->select('olahraga.*', 'kategori_olahraga.nama as nama_kategori')
            ->get();

            $kategori_olahraga = kategori_olahraga::all();
        // kirim data ke view
        return view('admin.olahraga.olahraga', compact('kategori_olahraga', 'olahraga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_olahraga = kategori_olahraga::all();
        $olahraga = olahraga::all();
        return view('admin.olahraga.create', compact('kategori_olahraga', 'olahraga'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //membuat tambah data
         $olahraga = new Olahraga;
         //kolo
         $olahraga->kode = $request->kode;
         $olahraga->nama = $request->nama;
         $olahraga->harga_jual = $request->harga_jual;
         $olahraga->harga_beli = $request->harga_beli;
         $olahraga->tiket = $request->tiket;
         $olahraga->min_stok = $request->min_stok;
         $olahraga->deskripsi = $request->deskripsi;
         $olahraga->kategori_olahraga_id = $request->kategori_olahraga_id;
         //simpen data
         $olahraga->save();
         //tampilin view olahraga
         return redirect('olahraga');
    }

    /**
     * Display the specified resource.
     */
    public function update(Request $request)
    {
        $olahraga = Olahraga::find($request->id);
        $olahraga->kode = $request->kode;
        $olahraga->nama = $request->nama;
        $olahraga->harga_jual = $request->harga_jual;
        $olahraga->harga_beli = $request->harga_beli;
        $olahraga->tiket = $request->tiket;
        $olahraga->min_stok = $request->min_stok;
        $olahraga->deskripsi = $request->deskripsi;
        $olahraga->kategori_olahraga_id = $request->kategori_olahraga_id;
        //simpen data
        $olahraga->save();
        //tampilin view olahraga
        return redirect('olahraga');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $olahraga = Olahraga::find($id);
        $olahraga->delete();

        return redirect('olahraga')->with('success', 'ola$olahraga berhasil dihapus');
    }
}
