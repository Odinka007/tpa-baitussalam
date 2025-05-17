@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Data Pengajar</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada beberapa masalah dengan input Anda.
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('datapengajar.update', $pengajar->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
                        <input type="text" name="nama_pengajar" class="form-control" value="{{ $pengajar->nama_pengajar }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki-Laki" {{ $pengajar->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $pengajar->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="{{ $pengajar->tempat_lahir }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pengajar->tanggal_lahir }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="pendidikan_umum" class="form-label">Pendidikan Umum</label>
                        <input type="text" name="pendidikan_umum" class="form-control" value="{{ $pengajar->pendidikan_umum }}">
                    </div>
                    <div class="col-md-6">
                        <label for="pendidikan_diniyah" class="form-label">Pendidikan Diniyah</label>
                        <input type="text" name="pendidikan_diniyah" class="form-control" value="{{ $pengajar->pendidikan_diniyah }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="penataran" class="form-label">Penataran</label>
                    <input type="text" name="penataran" class="form-control" value="{{ $pengajar->penataran }}">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2">{{ $pengajar->alamat }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" value="{{ $pengajar->pekerjaan }}">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('datapengajar.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
