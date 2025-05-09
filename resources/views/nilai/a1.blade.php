@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Santri Kelas A1</h2>
    @if($santris->count())
        <ul>
            @foreach ($santris as $santri)
                <li>{{ $santri->nama_santri }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada santri.</p>
    @endif
</div>
@endsection
