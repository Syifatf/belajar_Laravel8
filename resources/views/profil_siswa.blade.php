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
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                <h3>Profil Siswa</h3>
            </div>

            <div class="card-body">
                @can('isAdmin')
                <a href="{{route ('siswa.index')}}" class=" btn btn-primary">Kembali</a>
                <div class="row ml-2">
                    <h4 class="col-4">Nama</h4>
                    <h4>: {{$siswa->nama}}</h4>
                </div>

                <div class="row ml-2">
                    <h4 class="col-4">Nis</h4>
                    <h4>: {{$siswa->nis}}</h4>
                </div>

                <div class="row ml-2">
                    <h4 class="col-4">Tanggal Lahir</h4>
                    <h4>: {{$siswa->tgl_lahir}}</h4>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>