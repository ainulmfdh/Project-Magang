<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter & Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-image: url('asset/PORTOFOLIO.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }
		.carousel {
            max-width: 350px; 
            margin: auto;
        }
		.carousel-item {
            display: flex;
            justify-content: center;
			display: none;
        }
		.carousel-item.active {
    display: block;
}
        .card {
            width: 20rem;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
            text-align: left;
        }
        .btn-custom {
            background-color: #17a2b8;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
        }
        .btn-custom:hover {
            background-color: #138496;
            color: white;
        }
        .carousel-control-prev, .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: #17a2b8;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
<div class="container text-center mt-4">
    <h2 class="fw-bold">Tim Dokter Kami</h2>
<div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Dokter 1 -->
            <div class="carousel-item active">
                <div class="card">
                    <img src="asset/dokter.png" class="card-img-top" alt="Dokter">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">dr. Ria Sandy Deneska, Sp.M(K)</h5>
                        <p class="card-text h-25">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                        <button class="btn btn-custom">
                            <i class="fa-solid fa-book-open-reader"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
		<div class="carousel-item">
                <div class="card">
                    <img src="asset/dokter.png" class="card-img-top" alt="Dokter 2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">dr. Budi Santoso, Sp.M(K)</h5>
                        <p class="card-text h-25">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                        <button class="btn btn-custom">
                            <i class="fa-solid fa-book-open-reader"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigasi panah kiri & kanan -->
		<button class="carousel-control-prev" type="button" data-bs-target="#doctorCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#doctorCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>
<div class="container text-center mt-4">
    <h2 class="fw-bold">Berita terbaru</h2>
<div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Dokter 1 -->
            <div class="carousel-item active">
                <div class="card">
                    <img src="asset/dokter.png" class="card-img-top" alt="Dokter">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">BAKTI SOSIAL OPERASI KATARAK GRUP NUSANTARA & KLINIK MATA DR. SJAMSU</h5>
                        <p class="card-text h-25">Dalam upaya meningkatkan kualitas hidup masyarakat, Grup Nusantara bekerja sama dengan Klinik Mata Dr. Sjamsu menggelar bakti sosial operasi katarak bagi masyarakat kurang mampu. </p>
                        <button class="btn btn-custom">
                            <i class="fa-solid fa-book-open-reader"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
		<div class="carousel-item">
                <div class="card">
                    <img src="asset/dokter.png" class="card-img-top" alt="Dokter 2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">dr. Budi Santoso, Sp.M(K)</h5>
                        <p class="card-text h-25">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                        <button class="btn btn-custom">
                            <i class="fa-solid fa-book-open-reader"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigasi panah kiri & kanan -->
		<button class="carousel-control-prev" type="button" data-bs-target="#doctorCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#doctorCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Pastikan carousel berjalan otomatis
    var myCarousel = document.querySelector('#doctorCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000, // Ganti slide setiap 2 detik
        wrap: true
    });
</script>
</body>
</html>
