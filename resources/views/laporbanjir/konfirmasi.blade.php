<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Konfirmasi Laporan - LaporBanjir</title>

    <link rel="stylesheet" href="{{ asset('css/laporbanjir.css') }}">
</head>

<body>

<div class="container">

    <div class="card">

        <div class="success-icon">
            ✓
        </div>

        <div class="header">
            <h1>Laporan Berhasil Dikirim</h1>
            <p>Berikut adalah data laporan yang Anda kirimkan.</p>
        </div>

        <div class="report">

            <div class="report-item">
                <span>Nama Pelapor</span>
                <strong>{{ $data['nama'] }}</strong>
            </div>

            <div class="report-item">
                <span>Kecamatan</span>
                <strong>{{ $data['kecamatan'] }}</strong>
            </div>

            <div class="report-item">
                <span>Desa</span>
                <strong>{{ $data['desa'] }}</strong>
            </div>

            <div class="report-item">
                <span>Tinggi Genangan</span>
                <strong>{{ $data['tinggi_genangan'] }} cm</strong>
            </div>

        </div>

        <div class="notice">
            Data laporan ini hanya ditampilkan sebagai konfirmasi
            dan tidak disimpan secara permanen.
        </div>

        <a href="{{ route('lapor-banjir.form') }}" class="button">
            Buat Laporan Baru
        </a>

    </div>

</div>

</body>
</html>