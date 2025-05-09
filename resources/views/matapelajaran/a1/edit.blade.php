@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Mata Pelajaran A1</h1>

        <form action="{{ route('matapelajaran.a1.update', $mapel->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_matapelajaran">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="nama_matapelajaran" name="nama_matapelajaran" 
                       value="{{ old('nama_matapelajaran', $mapel->nama_matapelajaran) }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Mata Pelajaran</button>
        </form>

        <a href="{{ route('matapelajaran.a1.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Mata Pelajaran</a>
    </div>
@endsection
