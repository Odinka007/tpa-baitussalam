<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laporan Nilai - {{ $santri->nama_santri }}</title>
    <style>
        @page {
            margin: 2cm;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 12px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        h2,
        h3,
        h4 {
            text-align: center;
            margin: 0;
            padding: 6px 0;
        }

        .info {
            margin: 15px 0 25px 0;
        }

        .info p {
            margin: 4px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            font-size: 12px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .section-title {
            margin: 30px 0 10px;
            font-size: 14px;
            font-weight: bold;
        }

        .center {
            text-align: center;
        }

        .signature {
            margin-top: 50px;
            width: 100%;
            text-align: right;
        }

        .signature p {
            margin-bottom: 80px;
            margin-right: 50px;
        }
    </style>

</head>

<body>

    <h2>LAPORAN HASIL BELAJAR SANTRI</h2>
    <h3>TAMAN PENDIDIKAN AL-QUR'AN (TPA) BAITUSSALAM</h3>
    <h4>Kelas {{ $kelas->nama_kelas }}</h4>

    <div class="info">
        <p><strong>Nama:</strong> {{ $santri->nama_santri }}</p>
        {{-- <p><strong>Nama Orang Tua:</strong> {{ $santri->nama_orang_tua }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $santri->jenis_kelamin }}</p> --}}
    </div>

    {{-- <div class="section-title">Nilai Mata Pelajaran</div> --}}
    <table>
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Mata Pelajaran</th>
                <th class="center">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @forelse ($santri->nilai as $nilai)
                @if ($nilai->matapelajaran->kelas_id == $kelas->id)
                    <tr>
                        <td class="center">{{ $no++ }}</td>
                        <td>{{ $nilai->matapelajaran->nama_matapelajaran }}</td>
                        <td class="center">{{ $nilai->nilai }}</td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td colspan="3" class="center">Belum ada nilai mata pelajaran</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if ($santri->kepribadian)
        <table>
            <tr>
                <th>Sikap</th>
                <td>{{ $santri->kepribadian->sikap }}</td>
            </tr>
            <tr>
                <th>Kerajinan</th>
                <td>{{ $santri->kepribadian->kerajinan }}</td>
            </tr>
            <tr>
                <th>Keterampilan</th>
                <td>{{ $santri->kepribadian->keterampilan }}</td>
            </tr>
        </table>
    @else
        <p class="center">Belum ada nilai kepribadian.</p>
    @endif

    <div class="signature">
        <p>Mengetahui,</p>
        <p><strong>Kepala TPA</strong></p>
        <p>Glory Devinta, S.H</p>
    </div>

</body>

</html>
