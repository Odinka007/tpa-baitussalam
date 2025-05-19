@extends('layouts.app')

@section('title', 'Daftar Nilai Santri')

@section('content')
    <div class="container mt-4">
        <h4 class="mb-4 text-center">Pilih Kelas untuk Melihat Nilai Santri</h4>

        <div class="row">
            <!-- Card PAUD -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-4"
                    style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body text-center bg-primary rounded-4">
                        <h5 class="card-title text-light">Kelas PAUD</h5>
                        <p class="card-text text-light">Nilai santri kelas PAUD.</p>
                        <a href="{{ route('nilai.paud') }}" class="btn btn-outline-light w-100 rounded-4">Lihat Nilai</a>
                    </div>
                </div>
            </div>

            <!-- Card A1 -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kelas A1</h5>
                        <p class="card-text">Nilai santri kelas A1.</p>
                        <a href="{{ route('nilai.a1') }}" class="btn btn-outline-primary w-100">Lihat Nilai</a>
                    </div>
                </div>
            </div>

            <!-- Card A2 -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kelas A2</h5>
                        <p class="card-text">Nilai santri kelas A2.</p>
                        <a href="{{ route('nilai.a2') }}" class="btn btn-outline-primary w-100">Lihat Nilai</a>
                    </div>
                </div>
            </div>

            <!-- Card A3 -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kelas A3</h5>
                        <p class="card-text">Nilai santri kelas A3.</p>
                        <a href="{{ route('nilai.a3') }}" class="btn btn-outline-primary w-100">Lihat Nilai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
