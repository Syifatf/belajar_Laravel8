<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @extends('layouts.app')

    @section('content')
            <h3>Info Kegiatan</h3>
        <p>Informasi Kegiatan Siswa bulan ini:</p>
        
        <ul>
            <li>10 Agustus - Masa Orientasi Siswa</li>
            <li>17 Agustus - Upacara Kemerdekaan</li>
        </ul>

        <ul>
            <p>Informasi Keh=giatan Siswa bulan depan:</p>
        </ul>

        <ul>
            <li>12 September -  ujian tengah semester</li>
        </ul>
    @endsection   

</body>
</html>