<h2>Data Pendaftaran</h2>
@extends('layout')

@section('content')
    <h2>Data Pendaftaran</h2>
    <ul class="list-group mb-3">
        @foreach ($pendaftarans as $p)
            <li class="list-group-item">
                {{ $p->siswa->nama }} mendaftar ke <strong>{{ $p->jurusan->nama }}</strong> pada {{ $p->tanggal_daftar }}
            </li>
        @endforeach
    </ul>

    <h3>Tambah Pendaftaran</h3>
    <form method="POST" action="/pendaftarans" class="row g-3">
        @csrf
        <div class="col-md-4">
            <select name="siswa_id" class="form-select">
                @foreach ($siswas as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <select name="jurusan_id" class="form-select">
                @foreach ($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <input type="date" name="tanggal_daftar" class="form-control">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Daftarkan</button>
        </div>
    </form>
@endsection

