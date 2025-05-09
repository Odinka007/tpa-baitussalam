@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4 class="fw-bold mb-4">Input Nilai - Kelas {{ $kelas->nama_kelas }}</h4>

    @if(session('success'))
        <div class="alert alert-success small">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-striped table-hover text-dark">
                    <thead class="table-light text-white bg-primary">
                        <tr>
                            <th class="text-center" style="width: 40px;">No</th>
                            <th>Nama Santri</th>
                            <th class="text-center" style="width: 120px;">Nilai</th>
                            <th class="text-center" style="width: 200px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datasantris as $santri)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $santri->nama_santri }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#lihatNilaiModal{{ $santri->id }}">
                                    Lihat Nilai
                                </button>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between gap-1">
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#nilaiModal{{ $santri->id }}">
                                        Masukkan Nilai
                                    </button>
                                    <a href="{{ route('datanilai.paud.edit', $santri->id) }}" class="btn btn-sm btn-warning">
                                        Edit Nilai
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- MODAL INPUT NILAI --}}
    @foreach($datasantris as $santri)
    <div class="modal fade" id="nilaiModal{{ $santri->id }}" tabindex="-1" aria-labelledby="nilaiModalLabel{{ $santri->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('/datanilai/paud') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Input Nilai - {{ $santri->nama_santri }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="santri_id" value="{{ $santri->id }}">
                        <input type="hidden" name="kelas_id" value="{{ $santri->kelas_id }}">
                        @foreach($matapelajaran as $mapel)
                            @php
                                $nilai = $santri->nilai->where('matapelajaran_id', $mapel->id)->first();
                            @endphp
                            <div class="mb-2">
                                <label class="form-label">{{ $mapel->nama_matapelajaran }}</label>
                                <input type="hidden" name="matapelajaran_id[]" value="{{ $mapel->id }}">
                                <input type="number" name="nilai[]" class="form-control form-control-sm" value="{{ $nilai->nilai ?? '' }}" required min="0" max="100">
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    {{-- MODAL LIHAT NILAI --}}
    @foreach($datasantris as $santri)
<div class="modal fade" id="lihatNilaiModal{{ $santri->id }}" tabindex="-1" aria-labelledby="lihatNilaiLabel{{ $santri->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="lihatNilaiLabel{{ $santri->id }}">
                    Nilai - {{ $santri->nama_santri }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body px-4">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mb-0 align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th class="text-white bg-primary">Mata Pelajaran</th>
                                <th class="text-white bg-primary">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($matapelajaran as $mapel)
                                @php
                                    $nilai = $santri->nilai->where('matapelajaran_id', $mapel->id)->first();
                                @endphp
                                <tr>
                                    <td class="text-start">{{ $mapel->nama_matapelajaran }}</td>
                                    <td>
                                        @if($nilai)
                                            <span class="fs-5 fw-bold text-success">
                                                {{ $nilai->nilai }}
                                            </span>
                                        @else
                                            <span class="text-muted fst-italic">Belum Diinput</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
