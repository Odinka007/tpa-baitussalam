@extends('layouts.app')

@section('title', 'Nilai Santri A1')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4 text-dark">Daftar Nilai Santri Kelas A1</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary bg-primary text-white text-center">
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 30%;">Nama Santri</th>
                        <th style="width: 15%;">Jenis Kelamin</th>
                        <th style="width: 15%;">Nama Orang Tua</th>
                        <th style="width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datasantris as $index => $santri)
                        <tr>
                            <td class="text-center text-dark">{{ $index + 1 }}</td>
                            <td class="text-start text-dark">{{ $santri->nama_santri }}</td>
                            <td class="text-center text-dark">{{ $santri->jenis_kelamin }}</td>
                            <td class="text-start text-dark">{{ $santri->nama_orang_tua }}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info d-inline-flex align-items-center gap-1"
                                    data-bs-toggle="modal" data-bs-target="#nilaiModal{{ $santri->id }}">
                                    <i class="bi bi-eye"></i> Lihat Nilai
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Modal section, di luar tbody --}}
        @foreach ($datasantris as $santri)
            <div class="modal fade" id="nilaiModal{{ $santri->id }}" tabindex="-1"
                aria-labelledby="nilaiModalLabel{{ $santri->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="nilaiModalLabel{{ $santri->id }}">
                                Nama Santri: {{ $santri->nama_santri }}
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card border-primary mb-3">
                                {{-- <div class="card-header bg-primary text-white">
                                    Nilai Mata Pelajaran & Kepribadian
                                </div> --}}
                                <div class="card-body p-0">
                                    <table class="table table-bordered table-striped mb-0">
                                        <thead class="table-primary bg-primary text-white">
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th>Mata Pelajaran</th>
                                                <th style="width: 15%" class="text-end">Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @forelse ($santri->nilai as $nilai)
                                                @if ($nilai->matapelajaran->kelas_id == $kelas->id)
                                                    <tr>
                                                        <td class="text-end text-dark">{{ $no++ }}</td>
                                                        <td class="text-end text-dark"=>
                                                            {{ $nilai->matapelajaran->nama_matapelajaran ?? '-' }}</td>
                                                        <td class="text-end text-dark">{{ $nilai->nilai }}</td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">Belum ada nilai mata pelajaran
                                                    </td>
                                                </tr>
                                            @endforelse

                                            @if ($santri->kepribadian)
                                                <tr class="table-secondary">
                                                    <th colspan="3" class="text-center bg-primary text-white">Nilai
                                                        Kepribadian</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="text-end text-dark">Sikap</td>
                                                    <td class="text-end text-dark">{{ $santri->kepribadian->sikap }}</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="text-end text-dark">Kerajinan</td>
                                                    <td class="text-end text-dark">{{ $santri->kepribadian->kerajinan }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="text-end text-dark">Keterampilan</td>
                                                    <td class="text-end text-dark">{{ $santri->kepribadian->keterampilan }}
                                                    </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td colspan="3" class="text-center text-muted">Belum ada nilai
                                                        kepribadian.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
