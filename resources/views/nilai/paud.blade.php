<!DOCTYPE html>
<html>
<head>
    <title>Nilai Santri PAUD</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1>Nilai Santri Kelas PAUD</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Santri</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santris as $santri)
                <tr>
                    <td>{{ $santri->nama_santri }}</td>
                    <td>
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#nilaiModal" data-nama="{{ $santri->nama_santri }}" data-nilai="{{ json_encode($santri->nilai) }}">
                            Lihat Nilai
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="nilaiModal" tabindex="-1" aria-labelledby="nilaiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nilaiModalLabel">Nilai Santri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama Santri: </strong><span id="santriNama"></span></p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody id="nilaiList">
                            <!-- Nilai akan dimuat di sini -->
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    // Menggunakan JavaScript untuk memuat data ke dalam modal
    var nilaiModal = document.getElementById('nilaiModal');
    nilaiModal.addEventListener('show.bs.modal', function (event) {
        // Ambil button yang memicu modal
        var button = event.relatedTarget;

        // Ambil data dari button
        var namaSantri = button.getAttribute('data-nama');
        var nilaiData = JSON.parse(button.getAttribute('data-nilai'));

        // Update modal dengan data santri dan nilai
        var modalNama = document.getElementById('santriNama');
        var modalNilaiList = document.getElementById('nilaiList');

        modalNama.textContent = namaSantri;

        // Kosongkan daftar nilai sebelumnya
        modalNilaiList.innerHTML = '';

        // Tambahkan nilai ke dalam tabel modal
        nilaiData.forEach(function (nilai) {
            var row = document.createElement('tr');
            row.innerHTML = `
                <td>${nilai.mata_pelajaran}</td>
                <td>${nilai.nilai}</td>
            `;
            modalNilaiList.appendChild(row);
        });
    });
</script>

</body>
</html>
