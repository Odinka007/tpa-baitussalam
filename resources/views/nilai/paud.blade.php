@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Nilai Santri Kelas PAUD</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nama Santri</th>
                        <th style="width: 150px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datasantris as $santri)
                        <tr>
                            <td>{{ $santri->nama_santri }}</td>
                            <td>
                                <button 
                                    class="btn btn-info btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#lihatNilaiModal{{ $santri->id }}">
                                    <i class="bi bi-eye"></i> Lihat Nilai
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal untuk setiap santri --}}
    @foreach($datasantris as $santri)
        <div class="modal fade" id="lihatNilaiModal{{ $santri->id }}" tabindex="-1" aria-labelledby="lihatNilaiLabel{{ $santri->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content shadow">
                    <div class="modal-header bg-info text-white">
                        <h5 class="modal-title" id="lihatNilaiLabel{{ $santri->id }}">📋 Nilai: {{ $santri->nama_santri }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            @foreach($matapelajaran as $mapel)
                                @php
                                    $nilai = $santri->nilai->where('matapelajaran_id', $mapel->id)->first();
                                @endphp
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $mapel->nama_matapelajaran }}
                                    <span class="badge bg-primary rounded-pill">
                                        {{ $nilai->nilai ?? 'Belum Diinput' }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
