<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Jadwal Pemeriksaan - BPJS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm(event) {
    event.preventDefault(); // Hindari form langsung submit

    let form = document.querySelector('.needs-validation');

    if (!form.checkValidity()) {
        form.classList.add('was-validated'); // Tampilkan pesan error
        return false;
    }

    // Jika valid, tampilkan form tambahan
    document.getElementById('extraForm').classList.remove('d-none');
    return true;
}
    </script>
</head>
<body id="form">
    <div class="container mt-4">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a id="privat"class="nav-link text-white" href="privat.html">Privat</a>
            </li>
            <li class="nav-item">
                <a id="bpjs" class="nav-link active text-white" href="#">BPJS</a>
            </li>
        </ul>
        
        <div class="card card-custom p-3">
            <h5 class="text-white">Pesan Jadwal Pemeriksaan</h5>
            <form class="needs-validation" novalidate onsubmit="return validateForm(event)">
                <div class="mb-2">
                    <label for="nik" class="form-label">NIK</label>
                    <small class="form-example">Eg. (3576014403910003)</small>
                    <input type="text" id="nik" class="form-control" pattern="\d{16}" required>
                    <div class="invalid-feedback">Masukkan NIK 16 digit.</div>
                </div>
            
                <div class="mb-2">
                    <label for="rujukan" class="form-label">Nomor Surat Rujukan / Kontrol</label>
                    <small class="form-example">Eg. (021750052025K0002867)</small>
                    <input type="text" id="rujukan" class="form-control" pattern="[A-Z0-9]{20,25}" required>
                    <div class="invalid-feedback">Masukkan Nomor Rujukan yang valid.</div>
                </div>
            
                <button type="submit" class="btn btn-custom w-50 mt-2">Cek</button>
            </form>
            
            <div id="extraForm" class="d-none mt-3">
                <div class="p-3 bg-light border rounded text-dark">
                    <p><strong>Nama :</strong> John Doe</p>
                    <p><strong>NIK :</strong> 3576014403910003</p>
                    <p><strong>No. HP :</strong> 09754282839</p>
                </div>
                <div class="mt-2">
                    <label for="tanggal" class="form-label text-white">Pilih Tanggal</label>
                    <input type="date" id="tanggal" class="form-control">
                </div>
                <div class="mt-2">
                    <label for="sesi" class="form-label text-white">Pilih Sesi</label>
                    <select id="sesi" class="form-select">
                        <option>Pagi</option>
                        <option>Siang</option>
                        <option>Sore</option>
                    </select>
                </div>
                <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 3 bulan ke depan</small>
                <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
                <button type="submit" class="btn btn-custom w-100 mt-3">Kirim</button>
            </div>            
        </div>
    </div>
</body>
</html>
