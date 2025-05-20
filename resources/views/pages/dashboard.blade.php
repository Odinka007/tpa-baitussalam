@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    {{-- <div class="container"> --}}
    <!-- Deskripsi Profil TPA -->
    {{-- <div class="card mb-4 shadow"> --}}
    <div class="row g-4 mb-4">
        <!-- Card Gambar -->
        <div class="col-md-4">
            <div class="card shadow rounded-4 border-0 h-100" style="background-color: #adb7c1;">
                <div class="p-3 text-center">
                    <img src="{{ asset('image/pattern.png') }}" alt="Karakter TPA" class="img-fluid rounded-3"
                        style="width: 100%; aspect-ratio: 1 / 1; object-fit: cover; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
        </div>

        <!-- Card Deskripsi -->
        <div class="col-md-8">
            <div class="card shadow rounded-4 border-0 h-100" style="background-color: #1d8ed9;">
                <div class="card-body p-4">
                    <h3 class="card-title text-light fw-bold mb-3">Profil TPA Baitussalam</h3>
                    <p class="card-text text-light text-justify mb-2" style="line-height: 1.7;">
                        Taman Pendidikan Al-Qur'an (TPA) Basitussalam adalah lembaga pendidikan non-formal yang fokus pada
                        pembelajaran Al-Qur'an bagi anak-anak. TPA ini memiliki beberapa kelas seperti PAUD, A1, A2, dan A3
                        yang disesuaikan dengan tingkat usia dan kemampuan santri.
                    </p>
                    <p class="card-text text-light text-justify" style="line-height: 1.7;">
                        Dengan didukung oleh para pengajar yang berkompeten, TPA Basitussalam berkomitmen mencetak generasi
                        Qurani yang berakhlak mulia dan cinta Al-Qur'an.
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- </div> --}}
    {{-- </div> --}}

    <!-- Content Row -->
    <div class="row">

        <!-- Total Santri Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Santri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahSantri }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Pengajar Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pengajar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPengajar }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Mata Pelajaran -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Kelas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahKelas }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
