<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>    
    <table class='table table-bordered'>
        <thead>
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
            </tr>
        </thead>
        <tbody>
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
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
