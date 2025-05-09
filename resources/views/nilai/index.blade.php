<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1>Daftar Nilai Santri</h1>
    <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Santri</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $n)
                <tr>
                    <td>{{ $n->santri->nama_santri }}</td>
                    <td>{{ $n->mata_pelajaran }}</td>
                    <td>{{ $n->nilai }}</td>
                    <td>
                        <a href="{{ route('nilai.edit', $n->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('nilai.destroy', $n->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
