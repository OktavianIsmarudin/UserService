@extends('layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm p-4">
            <h2 class="mb-4 text-center">Dashboard</h2>
            <div class="list-group">
                <a href="/siswas" class="list-group-item list-group-item-action">Manajemen Siswa</a>
                <a href="/jurusans" class="list-group-item list-group-item-action">Manajemen Jurusan</a>
                <a href="/pendaftarans" class="list-group-item list-group-item-action">Manajemen Pendaftaran</a>
            </div>
        </div>
    </div>
</div>
@endsection
