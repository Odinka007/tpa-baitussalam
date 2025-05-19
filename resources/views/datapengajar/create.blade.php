@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow rounded">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Tambah Data Pengajar</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('datapengajar.store') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_pengajar" class="form-label text-dark">Nama Pengajar</label>
                            <input type="text" name="nama_pengajar" class="form-control"
                                value="{{ old('nama_pengajar') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>
                                    Laki-Laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tempat_lahir" class="form-label text-dark">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control"
                                value="{{ old('tempat_lahir') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="tanggal_lahir" class="form-label text-dark">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control"
                                value="{{ old('tanggal_lahir') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pendidikan_umum" class="form-label text-dark">Pendidikan Umum</label>
                            <input type="text" name="pendidikan_umum" class="form-control"
                                value="{{ old('pendidikan_umum') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="pendidikan_diniyah" class="form-label text-dark">Pendidikan Diniyah</label>
                            <input type="text" name="pendidikan_diniyah" class="form-control"
                                value="{{ old('pendidikan_diniyah') }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="penataran" class="form-label text-dark">Penataran</label>
                            <input type="text" name="penataran" class="form-control" value="{{ old('penataran') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="pekerjaan" class="form-label text-dark">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" value="{{ old('pekerjaan') }}"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label text-dark">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('datapengajar.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
