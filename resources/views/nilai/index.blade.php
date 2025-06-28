@extends('layouts.app')

@section('title', 'Daftar Nilai Santri')

@section('content')
    <div class="container mt-4">
        <h4 class="mb-4 text-center text-dark">Pilih Kelas untuk Melihat Nilai Santri</h4>

        <div class="row">
            @php
                $user = auth()->user();
                $kelasMap = [
                    1 => ['label' => 'PAUD', 'route' => route('nilai.paud')],
                    2 => ['label' => 'A1', 'route' => route('nilai.a1')],
                    3 => ['label' => 'A2', 'route' => route('nilai.a2')],
                    4 => ['label' => 'A3', 'route' => route('nilai.a3')],
                ];
            @endphp

            @foreach ($kelasMap as $id => $kelas)
                @php
                    $isAccessible = $user->role === 'admin' || $user->kelas_id == $id;
                @endphp

                <div class="col-md-6 col-lg-3 mb-4">
                    <div
                        class="card h-100 border-0 shadow-sm {{ $isAccessible ? 'bg-primary text-white' : 'bg-light text-muted' }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kelas {{ $kelas['label'] }}</h5>
                            <p class="card-text">Klik untuk lihat nilai.</p>

                            @if ($isAccessible)
                                <a href="{{ $kelas['route'] }}" class="btn btn-light btn-sm w-100">
                                    <i class="bi bi-eye"></i> Lihat Nilai
                                </a>
                            @else
                                <button class="btn btn-secondary btn-sm w-100" disabled>
                                    <i class="bi bi-lock"></i> Tidak Diizinkan
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
