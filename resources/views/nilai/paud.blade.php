@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4 class="fw-bold mb-4 text-primary">Nilai Santri - Kelas PAUD</h4>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle table-bordered mb-0">
                    <thead class="table-light bg-primary text-white text-center">
                        <tr>
                            <th>Nama Santri</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datasantris as $santri)
                            <tr>
                                <td class="text-dark">{{ $santri->nama_santri }}</td>
                                <td class="text-center">
                                    <button 
                                        class="btn btn-outline-primary btn-sm" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#lihatNilaiModal{{ $santri->id }}">
                                        <i class="bi bi-eye-fill me-1"></i> Lihat Nilai
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal Nilai --}}
    @foreach($datasantris as $santri)
        <div class="modal fade" id="lihatNilaiModal{{ $santri->id }}" tabindex="-1" aria-labelledby="lihatNilaiLabel{{ $santri->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content shadow-sm border-0">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="lihatNilaiLabel{{ $santri->id }}">
                            Nilai: {{ $santri->nama_santri }}
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body px-4">
                        <ul class="list-group list-group-flush">
                            @foreach($matapelajaran as $mapel)
                                @php
                                    $nilai = $santri->nilai->where('matapelajaran_id', $mapel->id)->first();
                                @endphp
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>
                                        <i class="bi bi-book me-1 text-primary"></i> {{ $mapel->nama_matapelajaran }}
                                    </span>
                                    <span class="badge rounded-pill {{ $nilai ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $nilai->nilai ?? 'Belum Diinput' }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i> Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
