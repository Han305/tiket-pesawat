@extends('template')

@section('body')    
<div class="card" style="margin: 0 10rem 0 10rem">
    <div class="card-header bg-primary text-light fw-semibold">Edit Tiket</div>
    <div class="card-body">
        <form class="row g-3" action="/tiket/{{ $tiket->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $tiket->nama) }}" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Dari</label>
                <input type="text" name="dari" value="{{ old('dari', $tiket->dari) }}" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Tujuan</label>
                <input type="text" name="tujuan" value="{{ old('tujuan', $tiket->tujuan) }}" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Maskapai</label>
                <select class="form-select" name="maskapai" aria-label="Default select example" value="{{ old('maskapai', $tiket->maskapai) }}">
                    <option selected>--Pilih Maskapai--</option>
                    <option value="Lion Air">Lion Air</option>
                    <option value="Garuda Indonesia">Garuda Indonesia</option>
                    <option value="Citilink">Citilink</option>
                    <option value="Batik Air">Batik Air</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Class</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="class1" value="Ekonomi {{ $tiket->class == 'Ekonomi' ? 'checked' : '' }}">
                    <label class="form-check-label" for="class1">Ekonomi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="class2" value="Business Class {{ $tiket->class == 'Business Class' ? 'checked' : '' }}">
                    <label class="form-check-label" for="class2">Business Class</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="class3" value="First Class {{ $tiket->class == 'First Class' ? 'checked' : '' }}">
                    <label class="form-check-label" for="class3">First Class</label>
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Tanggal Berangkat</label>
                <input type="date" class="form-control" name="tgl_berangkat" value="{{ old('tgl_berangkat', $tiket->tgl_berangkat) }}" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="jumlah" class="form-label">Jumlah Tiket</label>
                <input type="number" class="form-control" name="jmlh_tiket" value="{{ old('jmlh_tiket', $tiket->jmlh_tiket) }}" id="jumlah">
            </div>
            <div class="col-12">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="total_harga" value="{{ old('harga', $tiket->harga) }}" id="harga">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
        </form>

    </div>
</div>
@endsection
