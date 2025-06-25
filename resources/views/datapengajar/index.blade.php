@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        {{-- Pesan sukses --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Header --}}
        <div class="row align-items-center mb-3">
            <div class="col-md-6">
                <h2 class="mb-0">Data Pengajar</h2>
            </div>
            <div class="table-responsive">
                <div class="d-flex justify-content-end mb-2">
                    <a href="{{ route('datapengajar.create') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Tambah Pengajar
                    </a>
                </div>
            </div>

            {{-- Tabel --}}
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-striped table-hover text-dark">
                    <thead class="table-light text-white bg-primary">
                        <tr>
                            <th rowspan="2" class="text-center align-middle">No</th>
                            <th rowspan="2" class="text-center align-middle">Nomor Induk Pengajar</th>
                            <th rowspan="2" class="text-center align-middle">Nama Pengajar</th>
                            <th rowspan="2" class="text-center align-middle">Jenis Kelamin</th>
                            <th rowspan="2" class="text-center align-middle">Tempat & Tanggal Lahir</th>
                            <th colspan="2" class="text-center align-middle">Pendidikan</th>
                            <th rowspan="2" class="text-center align-middle">Penataran</th>
                            <th rowspan="2" class="text-center align-middle">Alamat</th>
                            <th rowspan="2" class="text-center align-middle">Pekerjaan</th>
                            <th rowspan="2" class="text-center align-middle" style="width: 160px;">Aksi</th>
                        </tr>
                        <tr>
                            <th class="text-center align-middle">Umum</th>
                            <th class="text-center align-middle">Diniyah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pengajar as $index => $p)
                            <tr>
                                <td class="text-center align-middle">{{ $pengajar->firstItem() + $index }}</td>
                                <td class="text-center align-middle">{{ strtoupper($p->nomor_induk_pengajar) }}</td>
                                <td class="text-center align-middle">{{ $p->nama_pengajar }}</td>
                                <td class="text-center align-middle">{{ $p->jenis_kelamin }}</td>
                                <td class="text-center align-middle">
                                    {{ $p->tempat_lahir }},
                                    {{ \Carbon\Carbon::parse($p->tanggal_lahir)->format('d-m-Y') }}
                                </td>
                                <td class="text-center align-middle">{{ $p->pendidikan_umum }}</td>
                                <td class="text-center align-middle">{{ $p->pendidikan_diniyah }}</td>
                                <td class="text-center align-middle">{{ $p->penataran }}</td>
                                <td class="text-center align-middle">{{ $p->alamat }}</td>
                                <td class="text-center align-middle">{{ $p->pekerjaan }}</td>
                                <td class="text-center align-middle">
                                    <a href="{{ route('datapengajar.edit', $p->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal{{ $p->id }}">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>

                                    {{-- Modal Konfirmasi Hapus --}}
                                    <div class="modal fade" id="hapusModal{{ $p->id }}" tabindex="-1"
                                        aria-labelledby="hapusModalLabel{{ $p->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content border-0 shadow">
                                                <div class="modal-header bg-danger text-white">
                                                    <h5 class="modal-title" id="hapusModalLabel{{ $p->id }}">
                                                        Konfirmasi
                                                        Hapus</h5>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin ingin menghapus data pengajar
                                                    <strong>{{ $p->nama_pengajar }}</strong>?
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('datapengajar.destroy', $p->id) }}"
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
                        @empty
                            <tr>
                                <td colspan="11" class="text-center">Tidak ada data pengajar</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Pagination --}}
                {{ $pengajar->links('pagination::bootstrap-5') }}
            </div>
        </div>
    @endsection
