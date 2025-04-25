<h2>Data Siswa</h2>


@extends('layout')

@section('content')
    <h2>Data Siswa</h2>
    <ul class="list-group mb-3">
        @foreach ($siswas as $siswa)
            <li class="list-group-item">{{ $siswa->nama }} - {{ $siswa->email }}</li>
        @endforeach
    </ul>

    <h3>Tambah Siswa</h3>
    <form method="POST" action="/siswas" class="row g-3">
        @csrf
        <div class="col-md-6">
            <input name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="col-md-6">
            <input name="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
@endsection

