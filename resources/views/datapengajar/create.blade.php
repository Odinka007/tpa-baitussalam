@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Data Pengajar</h2>

    <form action="{{ route('datapengajar.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
            <input type="text" name="nama_pengajar" class="form-control" value="{{ old('nama_pengajar') }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir') }}">
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}">
        </div>

        <div class="mb-3">
            <label for="pendidikan_umum" class="form-label">Pendidikan Umum</label>
            <input type="text" name="pendidikan_umum" class="form-control" value="{{ old('pendidikan_umum') }}" required>
        </div>

        <div class="mb-3">
            <label for="pendidikan_diniyah" class="form-label">Pendidikan Diniyah</label>
            <input type="text" name="pendidikan_diniyah" class="form-control" value="{{ old('pendidikan_diniyah') }}" required>
        </div>

        <div class="mb-3">
            <label for="penataran" class="form-label">Penataran</label>
            <input type="text" name="penataran" class="form-control" value="{{ old('penataran') }}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control">{{ old('alamat') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" value="{{ old('pekerjaan') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('datapengajar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
