<!DOCTYPE html>
<html>
<head>
    <title>Mata Pelajaran {{ $kelas->nama_kelas }}</title>
</head>
<body>

    <h1>Mata Pelajaran Kelas {{ $kelas->nama_kelas }}</h1>

    <nav style="margin-bottom: 20px;">
        <a href="{{ route('matapelajaran.paud') }}">PAUD</a> |
        <a href="{{ route('matapelajaran.a1') }}">A1</a> |
        <a href="{{ route('matapelajaran.a2') }}">A2</a> |
        <a href="{{ route('matapelajaran.a3') }}">A3</a>
    </nav>

    @if ($kelas->mataPelajarans->count())
        <ul>
            @foreach ($kelas->mataPelajarans as $mapel)
                <li>{{ $mapel->nama_matapelajaran }}</li>
            @endforeach
        </ul>
    @else
        <p>Belum ada mata pelajaran untuk kelas ini.</p>
    @endif

</body>
</html>
