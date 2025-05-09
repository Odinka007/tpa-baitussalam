<!DOCTYPE html>
<html>
<head>
    <title>Edit Nilai Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1>Edit Nilai Santri</h1>
    <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="santri_id" class="form-label">Nama Santri</label>
            <select name="santri_id" id="santri_id" class="form-control" required>
                <option value="{{ $nilai->santri_id }}">{{ $nilai->santri->nama_santri }}</option>
                @foreach ($santris as $santri)
                    <option value="{{ $santri->id }}">{{ $santri->nama_santri }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" id="mata_pelajaran" class="form-control" value="{{ $nilai->mata_pelajaran }}" required>
        </div>
        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai</label>
            <input type="number" name="nilai" id="nilai" class="form-control" step="0.01" value="{{ $nilai->nilai }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
