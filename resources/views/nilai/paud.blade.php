@extends('layouts.app')

@section('title', 'Nilai Santri PAUD')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Daftar Nilai Santri Kelas PAUD</h2>

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-primary bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Santri</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Orang Tua</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datasantris as $index => $santri)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $santri->nama_santri }}</td>
                            <td>{{ $santri->jenis_kelamin }}</td>
                            <td>{{ $santri->nama_orang_tua }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#nilaiModal{{ $santri->id }}">
                                    Lihat Nilai
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
