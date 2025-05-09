@extends('layouts.app')

@section('title', 'Daftar Kelas - Mata Pelajaran')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Daftar Kelas</h1>

    <div class="row justify-content-center">
        @php
            $kelas = [
                ['nama' => 'PAUD', 'route' => route('matapelajaran.paud.index')],
                ['nama' => 'A1', 'route' => route('matapelajaran.a1.index')],
                ['nama' => 'A2', 'route' => route('matapelajaran.a2.index')],
                ['nama' => 'A3', 'route' => route('matapelajaran.a3.index')],
            ];
        @endphp

        @foreach ($kelas as $item)
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm bg-primary text-white">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $item['nama'] }}</h5>
                    <p class="card-text">Klik untuk melihat daftar mata pelajaran kelas {{ $item['nama'] }}.</p>
                    <a href="{{ $item['route'] }}" class="btn btn-light btn-sm w-100">
                        <i class="bi bi-book"></i> Lihat Mata Pelajaran
                    </a>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>
@endsection
