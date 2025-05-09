<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kelas - Mata Pelajaran</title>
    <style>
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Daftar Kelas</h1>
    <ul>
        @foreach ($kelas as $k)
            <li>
                <a href="{{ url('/matapelajaran/' . strtolower($k->nama_kelas)) }}">
                    Mata Pelajaran Kelas {{ $k->nama_kelas }}
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html>
