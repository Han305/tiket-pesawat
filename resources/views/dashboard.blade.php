@extends('template')

@section('body')
<div class="container">

    <span class="justify-content-end d-flex">
        <span class="pe-2">
            <a href="{{ route('tiket.cetak') }}" target="_blank" class="btn btn-success mt-5"><i class="bi bi-file-earmark-break fs-6"> </i>Print</a>
        </span>
        <a href="{{ route('tiket.cetak_pdf') }}" target="_blank" class="btn btn-danger mt-5"><i class="bi bi-file-pdf fs-6"> </i>PDF</a>
    </span>
    @if(session('message'))
        <div class="alert alert-success small py-3 mb-4">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-dark table-striped mt-3">
        <tr>            
            <th scope="row">No</th>
            <th scope="row">Nama</th>
            <th scope="row">Dari</th>
            <th scope="row">Tujuan</th>
            <th scope="row">Maskapai</th>
            <th scope="row">Class</th>
            <th scope="row">Tanggal Berangkat</th>
            <th scope="row">Jumlah Tiket</th>
            <th scope="row">Harga</th>
            <th scope="row">Aksi</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($tiket as $s => $cell)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $cell->nama }}</td>
                <td>{{ $cell->dari }}</td>
                <td>{{ $cell->tujuan }}</td>
                <td>{{ $cell->maskapai }}</td>
                <td>{{ $cell->class }}</td>
                <td>{{ $cell->tgl_berangkat }}</td>
                <td>{{ $cell->jmlh_tiket }}</td>
                <td>{{ $cell->total_harga }}</td>
                <td>
                    <a href="/tiket/edit/{{ $cell->id }}" class="btn btn-primary btn-sm">
                        Edit
                    </a>
                    <a href="/tiket/hapus/{{ $cell->id }}" class="btn btn-danger btn-sm"
                        onclick="return deleteConfirm()">
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
