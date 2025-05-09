@extends('layouts.app')

@section('title', 'Mata Pelajaran Kelas A1')

@section('content')
<div class="container mt-5" style="max-width: 800px;">
    <div class="d-flex justify-content-between align-items-center mb-1">
        <h4 class="fw-bold mb-2">Mata Pelajaran Kelas A1</h4>
        <a href="{{ route('matapelajaran.a1.create') }}" class="btn btn-sm btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show small" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-2">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-striped table-hover text-dark">
                    <thead class="table-light text-white bg-primary">
                        <tr>
                            <th style="width: 40px;">No</th>
                            <th>Nama Mata Pelajaran</th>
                            <th style="width: 130px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($matapelajarans as $index => $mapel)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $mapel->nama_matapelajaran }}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('matapelajaran.a1.edit', $mapel->id) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('matapelajaran.a1.destroy', $mapel->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted small">Belum ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
