<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use PDF;

class PostController extends Controller
{
    public function tiket() {
        return view('tiket');
    }

    public function store(Request $request) {
        $tiket = new Tiket();
        $tiket->nama = $request->nama;
        $tiket->dari = $request->dari;
        $tiket->tujuan = $request->tujuan;
        $tiket->maskapai = $request->maskapai;
        $tiket->class = $request->class;
        $tiket->tgl_berangkat = $request->tgl_berangkat;
        $tiket->jmlh_tiket = $request->jmlh_tiket;
        $tiket->total_harga = $request->total_harga;
        $tiket->save();
        return redirect(route('sukses'));
    }

    public function dashboard() {
        $tiket = Tiket::all();
        return view('dashboard', ['tiket' => $tiket]);
    }

    public function edit($id) {
        $tiket = Tiket::find($id);
        return view('edit', ['tiket' => $tiket]);
    }

    public function update(Request $request, $id) {
        $tiket = Tiket::find($id);
        $tiket->nama = $request->nama;
        $tiket->dari = $request->dari;
        $tiket->tujuan = $request->tujuan;
        $tiket->maskapai = $request->maskapai;
        $tiket->class = $request->class;
        $tiket->tgl_berangkat = $request->tgl_berangkat;
        $tiket->jmlh_tiket = $request->jmlh_tiket;
        $tiket->total_harga = $request->total_harga;
        $tiket->save();        
        return redirect(route('dashboard'))->with([
            'message' => 'Data berhasil Diupdate'
        ]);
    }

    public function destroy($id) {
        $tiket = Tiket::find($id);
        $tiket->delete();
        return redirect(route('dashboard'))->with([
            'message' => 'Data berhasil dihapus!'
        ]);
    }

    public function cetak_pdf()
    {
    	$tiket = Tiket::all();
 
    	$pdf = PDF::loadview('tiket_pdf',['tiket'=>$tiket]);
    	return $pdf->download('laporan-tiket.pdf');
    }

    public function sukses() {
        return view('sukses');
    }

    public function cetak() {
        $tiket = Tiket::all();
        return view('cetak', ['tiket' => $tiket]);
    }
}
