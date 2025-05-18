@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Menampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row align-items-center mb-3">
            <div class="col-md-6">
                <h2>Data Santri</h2>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{ route('datasantri.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Tambah Santri
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <form action="{{ route('datasantri.index') }}" method="GET" class="mb-3">
                <div class="input-group input-group-sm col-md-4 mx-left">
                    <input type="text" name="search" class="form-control form-control-sm"
                        placeholder="Cari nama santri..." value="{{ request('search') }}">
                    <button class="btn btn-primary btn-sm" type="submit">
                        <i class="bi bi-search"></i> Cari
                    </button>
                </div>
            </form>
            <table class="table table-bordered table-sm table-striped table-hover text-dark">
                <thead class="table-light text-white bg-primary">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Santri</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Orang Tua</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Tempat & Tanggal Lahir</th>
                        <th>Bakat / Prestasi</th>
                        <th style="width: 160px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datasantris as $santri)
                        <tr>
                            <td>{{ $loop->iteration + ($datasantris->currentPage() - 1) * $datasantris->perPage() }}</td>
                            <td>{{ $santri->nama_santri }}</td>
                            <td>{{ $santri->jenis_kelamin }}</td>
                            <td>{{ $santri->nama_orang_tua }}</td>
                            <td>{{ $santri->kelas->nama_kelas ?? '-' }}</td>
                            <td>{{ $santri->alamat }}</td>
                            <td>{{ $santri->tempat_lahir }},
                                {{ \Carbon\Carbon::parse($santri->tanggal_lahir)->format('d-m-Y') }}</td>
                            <td>{{ $santri->bakat_prestasi ?? '-' }}</td>
                            <td>
                                <a href="{{ route('datasantri.edit', $santri->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <!-- Tombol Hapus dan Modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#hapusModal{{ $santri->id }}">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>

                                <!-- Modal Konfirmasi Hapus -->
                                <div class="modal fade" id="hapusModal{{ $santri->id }}" tabindex="-1"
                                    aria-labelledby="hapusModalLabel{{ $santri->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content border-0 shadow">
                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title" id="hapusModalLabel{{ $santri->id }}">Konfirmasi
                                                    Hapus</h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah kamu yakin ingin menghapus data santri
                                                <strong>{{ $santri->nama_santri }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('datasantri.destroy', $santri->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $datasantris->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
