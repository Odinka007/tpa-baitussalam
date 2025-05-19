@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h4 class="fw-bold mb-4">Input Nilai - Kelas {{ $kelas->nama_kelas }}</h4>

        @if (session('success'))
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
                            @foreach ($datasantris as $santri)
                                @php
                                    $jumlahNilai = $santri->nilai->count();
                                    $jumlahMapel = $matapelajaran->count();
                                @endphp
                                <tr>
                                    <td>{{ $datasantris->firstItem() + $loop->index }}</td>
                                    <td>{{ $santri->nama_santri }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary w-100" data-bs-toggle="modal"
                                            data-bs-target="#lihatNilaiModal{{ $santri->id }}">
                                            Lihat Nilai
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between gap-1">
                                            {{-- Tombol Masukkan Nilai / Nilai Tersimpan --}}
                                            @if ($jumlahNilai >= $jumlahMapel)
                                                <button type="button" class="btn btn-sm btn-success" disabled>
                                                    Nilai Tersimpan
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#nilaiModal{{ $santri->id }}">
                                                    Masukkan Nilai
                                                </button>
                                            @endif

                                            {{-- Tombol Edit Nilai --}}
                                            @if ($jumlahNilai > 0)
                                                <a href="{{ route('datanilai.a1.edit', $santri->id) }}"
                                                    class="btn btn-sm btn-warning">
                                                    Edit Nilai
                                                </a>
                                            @else
                                                <button class="btn btn-sm btn-warning" disabled>
                                                    Edit Nilai
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $datasantris->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL INPUT NILAI --}}
        @foreach ($datasantris as $santri)
            <div class="modal fade" id="nilaiModal{{ $santri->id }}" tabindex="-1"
                aria-labelledby="nilaiModalLabel{{ $santri->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> {{-- Perbesar modal --}}
                    <div class="modal-content">
                        <form action="{{ url('/datanilai/a1') }}" method="POST">
                            @csrf
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title">Input Nilai - {{ $santri->nama_santri }}</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="santri_id" value="{{ $santri->id }}">
                                <input type="hidden" name="kelas_id" value="{{ $santri->kelas_id }}">

                                <div class="row">
                                    {{-- Kolom Input Mata Pelajaran --}}
                                    <div class="col-md-6">
                                        <h6 class="text-primary fw-bold mb-2">Nilai Mata Pelajaran</h6>
                                        @foreach ($matapelajaran as $mapel)
                                            @php
                                                $nilai = $santri->nilai->where('matapelajaran_id', $mapel->id)->first();
                                            @endphp
                                            <div class="mb-2">
                                                <label class="form-label">{{ $mapel->nama_matapelajaran }}</label>
                                                <input type="hidden" name="matapelajaran_id[]"
                                                    value="{{ $mapel->id }}">
                                                <input type="number" name="nilai[]" class="form-control form-control-sm"
                                                    value="{{ $nilai->nilai ?? '' }}" required min="0"
                                                    max="100">
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- Kolom Input Kepribadian --}}
                                    <div class="col-md-6">
                                        <h6 class="text-primary fw-bold mb-2">Nilai Kepribadian</h6>

                                        @php
                                            $kepribadian = $santri->kepribadian;
                                            $opsiNilai = ['Sangat Baik', 'Baik', 'Kurang'];
                                        @endphp

                                        {{-- Sikap --}}
                                        <div class="mb-2">
                                            <label class="form-label">Sikap</label>
                                            <select name="sikap" class="form-control form-control-sm" required>
                                                <option value="">-- Pilih Sikap --</option>
                                                @foreach ($opsiNilai as $nilai)
                                                    <option value="{{ $nilai }}"
                                                        {{ $kepribadian && $kepribadian->sikap === $nilai ? 'selected' : '' }}>
                                                        {{ $nilai }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        {{-- Kerajinan --}}
                                        <div class="mb-2">
                                            <label class="form-label">Kerajinan</label>
                                            <select name="kerajinan" class="form-control form-control-sm" required>
                                                <option value="">-- Pilih Kerajinan --</option>
                                                @foreach ($opsiNilai as $nilai)
                                                    <option value="{{ $nilai }}"
                                                        {{ $kepribadian && $kepribadian->kerajinan === $nilai ? 'selected' : '' }}>
                                                        {{ $nilai }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        {{-- Keterampilan --}}
                                        <div class="mb-2">
                                            <label class="form-label">Keterampilan</label>
                                            <select name="keterampilan" class="form-control form-control-sm" required>
                                                <option value="">-- Pilih Keterampilan --</option>
                                                @foreach ($opsiNilai as $nilai)
                                                    <option value="{{ $nilai }}"
                                                        {{ $kepribadian && $kepribadian->keterampilan === $nilai ? 'selected' : '' }}>
                                                        {{ $nilai }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-end">
                                <button type="button" class="btn btn-sm btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach


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
                                    {{-- <h6 class="text-primary fw-bold mb-2">Nilai Mata Pelajaran</h6> --}}
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
                                                        <td class="text-start text-dark">{{ $mapel->nama_matapelajaran }}
                                                        </td>
                                                        <td>
                                                            @if ($nilai)
                                                                <span
                                                                    class="fw-bold text-success">{{ $nilai->nilai }}</span>
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

                                {{-- Tabel Kepribadian --}}
                                <div class="col-md-6">
                                    {{-- <h6 class="text-primary fw-bold mb-2">Nilai Kepribadian</h6> --}}
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
                                                            <span class="fw-bold text-success">
                                                                {{ $kepribadian->sikap }}</span>
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
                            <button type="button" class="btn btn-secondary btn-sm"
                                data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
