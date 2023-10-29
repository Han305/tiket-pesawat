@extends('template')

@section('body')
    <div class="card" style="margin: 0 10rem 0 10rem">
        <div class="card-header bg-primary text-light fw-semibold">Pesan Tiket</div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('proses.tiket') }}" method="post">
                @csrf
                <div class="col-12">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Dari</label>
                    <input type="text" name="dari" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Maskapai</label>
                    <select class="form-select" name="maskapai" aria-label="Default select example">
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
                        <input class="form-check-input" type="radio" name="class" id="class1" value="Ekonomi">
                        <label class="form-check-label" for="class1">Ekonomi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="class" id="class2" value="Business Class">
                        <label class="form-check-label" for="class2">Business Class</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="class" id="class3" value="First Class">
                        <label class="form-check-label" for="class3">First Class</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Tanggal Berangkat</label>
                    <input type="date" class="form-control" name="tgl_berangkat" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="jumlah" class="form-label">Jumlah Tiket</label>
                    <input type="number" class="form-control" name="jmlh_tiket" id="jumlah" value="1">
                </div>
                <div class="col-12">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" name="total_harga" id="harga" readonly>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Pesan</button>
                </div>
            </form>

        </div>
    </div>

    <script>
        var radioButtons = document.querySelectorAll('input[type="radio"]');
        var jumlahInput = document.getElementById("jumlah");
        var hargaInput = document.getElementById("harga");

        function hitungHarga() {
            var hargaPerTiket = 0;
            var selectedTiket = null;

            for (var i = 0; i < radioButtons.length; i++) {
                if (radioButtons[i].checked) {
                    selectedTiket = radioButtons[i].value;
                    break;
                }
            }

            if (selectedTiket === "Ekonomi") {
                hargaPerTiket = 1000000;
            } else if (selectedTiket === "Business Class") {
                hargaPerTiket = 3000000;
            } else if (selectedTiket === "First Class") {
                hargaPerTiket = 5000000;
            }

            var jumlah = parseInt(jumlahInput.value);
            var harga = hargaPerTiket * jumlah;
            hargaInput.value = " Rp " + harga;
        }

        for (var i = 0; i < radioButtons.length; i++) {
            radioButtons[i].addEventListener("change", hitungHarga);
        }

        jumlahInput.addEventListener("input", hitungHarga);

        hitungHarga();
    </script>
@endsection
