@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h4 class="mb-4 fw-bold text-center">Menu Kelas</h4>

        <div class="row g-4">
            @php
                $user = auth()->user();
                $kelasMap = [
                    1 => ['label' => 'PAUD', 'route' => route('datanilai.paud.index')],
                    2 => ['label' => 'A1', 'route' => route('datanilai.a1.index')],
                    3 => ['label' => 'A2', 'route' => route('datanilai.a2.index')],
                    4 => ['label' => 'A3', 'route' => route('datanilai.a3.index')],
                ];
            @endphp

            @foreach ($kelasMap as $id => $kelas)
                @php
                    $isAccessible = $user->role === 'admin' || $user->kelas_id == $id;
                @endphp

                <div class="col-md-6 col-lg-3 mb-4">
                    <div
                        class="card h-100 shadow-sm border-0 {{ $isAccessible ? 'bg-primary text-white' : 'bg-light text-muted' }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $kelas['label'] }}</h5>
                            <p class="card-text">Input nilai untuk kelas ini.</p>

                            @if ($isAccessible)
                                <a href="{{ $kelas['route'] }}" class="btn btn-light btn-sm w-100">
                                    <i class="bi bi-book"></i> Input Nilai
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
