@extends('layouts.app') <!-- Ganti jika Anda pakai layout lain -->

@section('content')
<div class="container">
    <h2>Data Santri</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Santri</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datasantris as $santri)
            <tr>
                <td>{{ $santri->nama_santri }}</td>
                <td>{{ $santri->kelas->nama_kelas ?? '-' }}</td>
                <td>{{ $santri->alamat }}</td>
                <td>{{ $santri->tempat_lahir }}</td>
                <td>{{ \Carbon\Carbon::parse($santri->tanggal_lahir)->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
