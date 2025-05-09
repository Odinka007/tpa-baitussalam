@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Mata Pelajaran A2</h1>

        <form action="{{ route('matapelajaran.a2.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_matapelajaran">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="nama_matapelajaran" name="nama_matapelajaran" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Tambah Mata Pelajaran</button>
        </form>

        <a href="{{ route('matapelajaran.a2.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Mata Pelajaran</a>
    </div>
@endsection
