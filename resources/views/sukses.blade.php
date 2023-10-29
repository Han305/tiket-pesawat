@extends('template')

@section('body')
    <div class="d-flex justify-content-center">
        <img src="{{ asset('img/done.gif') }}" width="300" alt="">
    </div>
    <div class="d-flex justify-content-center pt-5">
        <h3>Berhasil Memesan!</h3>
    </div>
    <div class="d-flex justify-content-center pt-5">
        <a href="{{ route('pesan.tiket') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
