<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        #menu-navbar {
            gap: 20px;
            justify-content: end;
            width: 100%;
        }

        #menu-navbar p {
            margin: 0;
            font-weight: 500;
        }

        .slider-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 0 30px;
            min-height: 100vh; 
        }

        .slider-heading {
            color: #CEFAFF;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-top: 150px;
        }

        .slider-text {
            color: white;
            font-weight: 600;
            font-size: 20px;
            text-align: center;
            margin-top: 15px;
            padding: 0 20px;
        }

        .booking-btn {
            width: 275px;
            height: 57px;
            border-radius: 10px;
            background-color: white;
            color: #00AAB5;
            font-weight: bold;
            margin-top: 100px;
            border: none;
        }

        #img-slider {
            width: 100%;
            height: 100vh;
            object-fit: cover; 
        }
    </style>
</head>
<body id="header">
    <div class="w-100 bg-white position-sticky top-0 d-flex align-items-center" style="height: 80px; padding-left: 50px; padding-right: 50px; z-index: 30;">
        <div class="d-flex align-items-center">
            <img id="logomata" src="<?= base_url('asset/image_2.png');?>">
            <img src="<?= base_url('asset/image_4.png');?>">
        </div>
        <div id="menu-navbar" class="d-flex flex-row align-items-center">
            <p class="menu-border">Beranda</p>
            <p class="menu-border">Pelayanan</p>
            <p class="menu-border">Dokter</p>
            <p class="menu-border">Jadwal Dokter</p>
            <p class="menu-border">Berita Terbaru</p>
        </div>
    </div>
    
    <div style="min-height: 100vh;" class="h-100 position-relative" style="z-index: 10;">
        <div style="min-height: 100vh;">
            <img id="img-slider" style="min-height: 100vh;" class="w-100" src="<?= base_url('asset/bg-slider.png');?>">
        </div>
        <div class="slider-overlay h-100 d-flex flex-column align-items-center">
            <div class="d-flex flex-column">
                <h1 class="slider-heading">FOKUS UTAMA UNTUK KESEHATAN MATA ANDA</h1>
                <p class="slider-text">Jadwalkan waktu anda untuk periksa maupun konsultasi pada klinik kami, dengan klik booking dibawah ini</p>
            </div>
            <button id="btnBooking" class="booking-btn">
                <i class="fa-regular fa-calendar me-1"></i>
                Booking
            </button>
        </div>
    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('btnBooking').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah perilaku default (jika tombol dalam form)
            document.getElementById('bpjs').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('logomata').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah perilaku default (jika tombol dalam form)
            document.getElementById('header').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

    <script>
        const hamburgerMenuToggle = document.getElementById('hamburger-menu-toggle');
        const hamburgerMenu = document.getElementById('hamburger-menu');
        const closeHamburgerMenu = document.getElementById('close-hamburger-menu');
        let hamburgerMenuIsOpen = false;
        const sliderImages = ["<?= base_url('asset/bg-slider.png');?>", "<?= base_url('asset/bg2.png');?>"];
        const imageSlider = document.getElementById("img-slider");
        let imageSliderActive = 0;

        hamburgerMenuToggle.addEventListener('click', () => {
            hamburgerMenuIsOpen = !hamburgerMenuIsOpen;
            if (hamburgerMenuIsOpen) {
                hamburgerMenu.style.right = '0';
            } else {
                hamburgerMenu.style.right = '-1000px';
            }
        });

        closeHamburgerMenu.addEventListener('click', () => {
            hamburgerMenuIsOpen = false;
            hamburgerMenu.style.right = '-1000px';
        });

        document.addEventListener('click', (event) => {
            if (hamburgerMenuIsOpen && !hamburgerMenu.contains(event.target) && !hamburgerMenuToggle.contains(event.target)) {
                hamburgerMenuIsOpen = false;
                hamburgerMenu.style.right = '-1000px';
            }
        });

        setInterval(() => {
            if (imageSliderActive === sliderImages.length - 1) {
                imageSliderActive = 0;
            } else {
                imageSliderActive++;
            }
            imageSlider.setAttribute('src', `${sliderImages[imageSliderActive]}`);
        }, 2000);
    </script>
</body>
</html>