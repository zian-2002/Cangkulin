@extends('layout')

@section('content')
<h2>Edit Kelompok Tani</h2>

<form action="{{ route('kelompok.update', $kelompok->id_kelompoktani) }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Nama Kelompok Tani</label>
        <input type="text" name="nama_kelompoktani" class="form-control" value="{{ $kelompok->nama_kelompoktani }}">
    </div>

    <div class="form-group">
        <label>Jumlah Anggota</label>
        <input type="number" name="jumlah_kelompoktani" class="form-control" value="{{ $kelompok->jumlah_kelompoktani }}">
    </div>

    <div class="form-group">
        <label>No HP</label>
        <input type="text" name="no_hp_kelompoktani" class="form-control" value="{{ $kelompok->no_hp_kelompoktani }}">
    </div>

    <div class="form-group">
        <label>NIK</label>
        <input type="text" name="nik" class="form-control" value="{{ $kelompok->nik }}">
    </div>

    <div class="form-group">
        <label>Deskripsi Jalan</label>
        <textarea name="deskripsi_jalan" class="form-control">{{ $kelompok->deskripsi_jalan }}</textarea>
    </div>

    <hr>

    <h3>Alamat</h3>

    <div class="form-group">
        <label>Desa</label>
        <input type="text" name="desa" class="form-control" value="{{ $kelompok->desa }}">
    </div>

    <div class="form-group">
        <label>Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" value="{{ $kelompok->kecamatan }}">
    </div>

    <div class="form-group">
        <label>Kabupaten</label>
        <input type="text" name="kabupaten" class="form-control" value="{{ $kelompok->kabupaten }}">
    </div>

    <button type="submit" class="btn btn-green">Update</button>
</form>
@endsection
