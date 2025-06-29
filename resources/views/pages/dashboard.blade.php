@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">


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
                <div class="card rounded-4 border-0 h-100"
                    style="background-color: #e2e4e5; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); border-left: 8px solid #0d6efd;">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4 text-primary">
                            <i class="fas fa-school me-2"></i> Profil TPA Baitussalam
                        </h3>
                        <p class="card-text text-justify mb-3 text-dark" style="line-height: 1.8;">
                            <i class="fas fa-book-open me-2 text-primary"></i>
                            Taman Pendidikan Al-Qur'an (TPA) Basitussalam adalah lembaga pendidikan non-formal yang fokus
                            pada
                            pembelajaran Al-Qur'an bagi anak-anak. TPA ini memiliki beberapa kelas seperti PAUD, A1, A2, dan
                            A3
                            yang disesuaikan dengan tingkat usia dan kemampuan santri.
                        </p>
                        <p class="card-text text-justify text-dark" style="line-height: 1.8;">
                            <i class="fas fa-users me-2 text-success"></i>
                            Dengan didukung oleh para pengajar yang berkompeten, TPA Basitussalam berkomitmen mencetak
                            generasi
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

        <!-- Ekstrakurikuler Section -->
        <div class="row g-4 mb-4">
            <!-- Beladiri Card -->
            <div class="col-md-4">
                <div class="card rounded-4 border-0 h-100" style="box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);">
                    <img src="{{ asset('image/asad.jpg') }}" class="card-img-top rounded-top-4" alt="Beladiri"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-success">Ekstrakurikuler Beladiri</h5>
                        <p class="card-text text-justify text-dark" style="line-height: 1.6;">
                            Kegiatan beladiri bertujuan untuk melatih kedisiplinan, keberanian, dan menjaga kebugaran
                            santri.
                            Melalui latihan rutin, santri dibekali kemampuan bela diri dasar dengan pendekatan yang
                            menyenangkan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- BCM Card -->
            <div class="col-md-4">
                <div class="card rounded-4 border-0 h-100" style="box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);">
                    <img src="{{ asset('image/bcm.jpeg') }}" class="card-img-top rounded-top-4" alt="BCM"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-success">Kegiatan BCM</h5>
                        <p class="card-text text-justify text-dark" style="line-height: 1.6;">
                            BCM (Bermain, Cerita, Menyanyi) di TPA Baitussalam adalah metode pembelajaran menyenangkan yang
                            menggabungkan permainan edukatif, kisah inspiratif, dan lagu islami untuk membantu anak memahami
                            materi agama secara interaktif dan bermakna.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Outbound Card -->
            <div class="col-md-4">
                <div class="card rounded-4 border-0 h-100" style="box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);">
                    <img src="{{ asset('image/outboond.jpeg') }}" class="card-img-top rounded-top-4" alt="Outbound"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-warning">Outbound Learning</h5>
                        <p class="card-text text-justify text-dark" style="line-height: 1.6;">
                            Outbound dilakukan secara berkala untuk meningkatkan kerjasama, kepemimpinan, dan keberanian
                            santri.
                            Kegiatan dilakukan di alam terbuka dengan berbagai permainan edukatif yang menyenangkan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
