@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h4 class="mb-4 fw-bold text-center">Menu Kelas</h4>

    <div class="row g-4">

        @php
            $kelas = [
                ['label' => 'PAUD', 'route' => route('datanilai.paud.index')],
                ['label' => 'A1', 'route' => route('datanilai.a1.index')],
                ['label' => 'A2', 'route' => route('datanilai.a2.index')],
                ['label' => 'A3', 'route' => route('datanilai.a3.index')],
            ];
        @endphp

@foreach ($kelas as $item)
<div class="col-md-6 col-lg-3 mb-4">
    <div class="card h-100 border-0 shadow-sm bg-primary text-white">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $item['label'] }}</h5>
            <p class="card-text">Klik untuk input nilai.</p>
            <a href="{{ $item['route'] }}" class="btn btn-light btn-sm w-100">
                <i class="bi bi-book"></i> Input Nilai
            </a>
        </div>
    </div>
</div>

@endforeach

    </div>
</div>
@endsection
