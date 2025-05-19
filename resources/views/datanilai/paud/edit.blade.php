@extends('layouts.app')

@section('content')
    <div class="container p-4 rounded bg-primary text-white">
        <h4 class="mb-4">Edit Nilai Santri - Kelas {{ $santri->kelas->nama_kelas }}</h4>

        @if (session('success'))
            <div class="alert alert-success bg-light text-dark">{{ session('success') }}</div>
        @endif

        <form action="{{ route('datanilai.paud.update', $santri->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <strong class="text-dark">Nama Santri:</strong>
                    <span class="text-dark">{{ $santri->nama_santri }}</span>
                </div>

                <div class="card-body bg-white text-dark">

                    {{-- Nilai Mata Pelajaran --}}
                    <h5 class="mb-3 border-bottom pb-2">Nilai Mata Pelajaran</h5>
                    <div class="row gy-3">
                        @foreach ($matapelajaran as $mapel)
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">{{ $mapel->nama_matapelajaran }}</label>
                                <input type="hidden" name="matapelajaran_id[]" value="{{ $mapel->id }}">
                                <input type="number" name="nilai[]"
                                    class="form-control @error('nilai.*') is-invalid @enderror"
                                    value="{{ $nilai->where('matapelajaran_id', $mapel->id)->first()->nilai ?? '' }}"
                                    required min="0" max="100" step="1"
                                    placeholder="Masukkan nilai 0-100">
                                @error('nilai.*')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @endforeach
                    </div>

                    {{-- Nilai Kepribadian --}}
                    <h5 class="mt-4 mb-3 border-bottom pb-2">Nilai Kepribadian</h5>
                    <div class="row gy-3">
                        @php
                            $options = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang']; // atau sesuaikan dengan pilihan yang kamu inginkan
                        @endphp

                        {{-- Sikap --}}
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Sikap</label>
                            <select name="sikap" class="form-select @error('sikap') is-invalid @enderror">
                                <option value="">-- Pilih Nilai --</option>
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        {{ old('sikap', $kepribadian->sikap ?? '') == $option ? 'selected' : '' }}>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                            @error('sikap')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Kerajinan --}}
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Kerajinan</label>
                            <select name="kerajinan" class="form-select @error('kerajinan') is-invalid @enderror">
                                <option value="">-- Pilih Nilai --</option>
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        {{ old('kerajinan', $kepribadian->kerajinan ?? '') == $option ? 'selected' : '' }}>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kerajinan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Keterampilan --}}
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Keterampilan</label>
                            <select name="keterampilan" class="form-select @error('keterampilan') is-invalid @enderror">
                                <option value="">-- Pilih Nilai --</option>
                                @foreach ($options as $option)
                                    <option value="{{ $option }}"
                                        {{ old('keterampilan', $kepribadian->keterampilan ?? '') == $option ? 'selected' : '' }}>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                            @error('keterampilan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">Kembali</a>
                        <button type="submit" class="btn btn-success px-4">Update Nilai</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
