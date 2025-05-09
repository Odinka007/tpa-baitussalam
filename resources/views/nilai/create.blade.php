<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1>Tambah Nilai Santri</h1>
    <form action="{{ route('nilai.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="santri_id">Santri</label>
            <select name="santri_id" id="santri_id" class="form-control">
                @foreach ($santri as $s)
                    <option value="{{ $s->id }}">{{ $s->nama_santri }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="matapelajaran">Mata Pelajaran</label>
            <select name="matapelajaran" id="matapelajaran" class="form-control">
                @foreach ($matapelajaran as $mp)
                    <option value="{{ $mp }}">{{ $mp }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" id="nilai" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan Nilai</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
