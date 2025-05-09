@extends('layouts.app') <!-- Ganti jika Anda pakai layout lain -->

@section('title', 'Daftar Kelas - Mata Pelajaran')

@section('content')
<head>
    <title>Daftar Nilai Santri</title>
</head>
<body>

<div class="container mt-4">
    <h1>Daftar Nilai Santri {{ isset($kelas) ? 'Kelas ' . $kelas->nama_kelas : '' }}</h1>

    <nav class="mb-3">
        <a href="{{ route('nilai.paud') }}" class="btn btn-outline-primary btn-sm me-2">PAUD</a>
        <a href="{{ route('nilai.a1') }}" class="btn btn-outline-primary btn-sm me-2">A1</a>
        <a href="{{ route('nilai.a2') }}" class="btn btn-outline-primary btn-sm me-2">A2</a>
        <a href="{{ route('nilai.a3') }}" class="btn btn-outline-primary btn-sm me-2">A3</a>
    </nav>
    

</div>

</body>
@endsection
