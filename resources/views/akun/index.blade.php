@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h4 class="fw-bold mb-4 text-dark">Kelola Akun</h4>

        <div class="mb-3 text-end">
            <a href="{{ route('akun.create') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-user-plus"></i> Tambah Akun
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-striped align-middle text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Kelas</th>
                                <th style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $i => $user)
                                <tr>
                                    <td class="text-dark">{{ $i + 1 }}</td>
                                    <td class="text-dark">{{ $user->name }}</td>
                                    <td class="text-dark">{{ $user->email }}</td>
                                    <td class="text-dark">{{ ucfirst($user->role) }}</td>
                                    <td class="text-dark">{{ $user->kelas->nama_kelas ?? '-' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-1">
                                            {{-- Tombol Edit --}}
                                            <a href="{{ route('akun.edit', $user->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            {{-- Tombol Hapus --}}
                                            <form action="{{ route('akun.destroy', $user->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus akun ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($users->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center text-muted fst-italic">Belum ada data akun.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
