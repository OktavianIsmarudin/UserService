<h2>Data Jurusan</h2>
@extends('layout')

@section('content')
    <h2>Data Jurusan</h2>
    <ul class="list-group mb-3">
        @foreach ($jurusans as $jurusan)
            <li class="list-group-item">{{ $jurusan->nama }}</li>
        @endforeach
    </ul>

    <h3>Tambah Jurusan</h3>
    <form method="POST" action="/jurusans" class="row g-3">
        @csrf
        <div class="col-md-6">
            <input name="nama" class="form-control" placeholder="Nama Jurusan">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Tambah</button>
        </div>
    </form>
@endsection

