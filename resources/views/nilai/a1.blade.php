@extends('layouts.app')

@section('title', 'Nilai Santri A1')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4 text-dark">Daftar Nilai Santri Kelas PAUD</h2>

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
                            <td class="text-center text-dark">{{ $santri->nama_santri }}</td>
                            <td class="text-center text-dark">{{ $santri->jenis_kelamin }}</td>
                            <td class="text-center text-dark">{{ $santri->nama_orang_tua }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#lihatNilaiModal{{ $santri->id }}">
                                    Lihat Nilai
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- MODAL LIHAT NILAI --}}
        @foreach ($datasantris as $santri)
            <div class="modal fade" id="lihatNilaiModal{{ $santri->id }}" tabindex="-1"
                aria-labelledby="lihatNilaiLabel{{ $santri->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> {{-- Tambahkan modal-lg agar lebar modal cukup --}}
                    <div class="modal-content shadow">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="lihatNilaiLabel{{ $santri->id }}">
                                Nilai - {{ $santri->nama_santri }}
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body px-4">
                            <div class="row">
                                {{-- Tabel Mata Pelajaran --}}
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm align-middle text-center">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th class="text-white bg-primary">Mata Pelajaran</th>
                                                    <th class="text-white bg-primary">Nilai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($matapelajaran as $mapel)
                                                    @php
                                                        $nilai = $santri->nilai
                                                            ->where('matapelajaran_id', $mapel->id)
                                                            ->first();
                                                    @endphp
                                                    <tr>
                                                        <td class="text-start text-dark">
                                                            {{ $mapel->nama_matapelajaran }}
                                                        </td>
                                                        <td>
                                                            @if ($nilai)
                                                                <span
                                                                    class="fw-bold text-success">{{ $nilai->nilai }}</span>
                                                            @else
                                                                <span class="text-muted fst-italic">Belum
                                                                    Diinput</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- Tabel Kepribadian --}}
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm align-middle text-center">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th class="text-white bg-primary">Kepribadian</th>
                                                    <th class="text-white bg-primary">Nilai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $kepribadian = $santri->kepribadian; @endphp
                                                <tr>
                                                    <td class="text-start text-dark">Sikap</td>
                                                    <td>
                                                        @if ($kepribadian)
                                                            <span
                                                                class="fw-bold text-success">{{ $kepribadian->sikap }}</span>
                                                        @else
                                                            <span class="text-muted fst-italic">Belum Diinput</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start text-dark">Kerajinan</td>
                                                    <td>
                                                        @if ($kepribadian)
                                                            <span
                                                                class="fw-bold text-success">{{ $kepribadian->kerajinan }}</span>
                                                        @else
                                                            <span class="text-muted fst-italic">Belum Diinput</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start text-dark">Keterampilan</td>
                                                    <td>
                                                        @if ($kepribadian)
                                                            <span
                                                                class="fw-bold text-success">{{ $kepribadian->keterampilan }}</span>
                                                        @else
                                                            <span class="text-muted fst-italic">Belum Diinput</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> {{-- end row --}}
                        </div>
                        <div class="modal-footer justify-content-end">
                            <a href="{{ route('nilai.a1.cetak', $santri->id) }}" class="btn btn-success" target="_blank">
                                <i class="bi bi-file-earmark-pdf"></i> Cetak PDF
                            </a>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
