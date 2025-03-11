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
        body {
            min-height: 100vh;
            background-color: black;
        }
        
        #hamburger-menu {
            width: 70vw;
            height: 100vh;
            background-color: #00AAB5;
            position: fixed;
            top: 0;
            right: -1000px;
            padding-left: 40px;
            color: white;
            z-index: 40;
            transition: all 0.3s linear;
        }

        .slider-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 0 30px;
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

        .menu-border {
            border-bottom: 1px solid white;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="w-100 bg-white position-relative" style="height: 80px; z-index: 30;">
        <div class="d-flex align-items-center h-100">
            <img class="position-fixed" style="top: 25px; left: 20px; width: 57px; height: 29px;" src="<?= base_url('asset/image_2.png');?>">
            <img style="margin-left: 85px;" src="<?= base_url('asset/image_4.png');?>">
        </div>
        <div id="hamburger-menu-toggle" class="position-fixed" style="top: 28px; right: 20px; padding-right: 20px;">
            <img src="<?= base_url('asset/material-symbols_menu.png');?>">   
        </div>
    </div>
    
    <div id="hamburger-menu">
        <div class="d-flex justify-content-end align-items-center mt-4 pe-4">
            <i id="close-hamburger-menu" class="fa-solid fa-x"></i>
        </div>
        <div class="d-flex flex-column gap-4 mt-5 px-2 pe-4">
            <p class="menu-border">Beranda</p>
            <p class="menu-border">Pelayanan</p>
            <p class="menu-border">Dokter</p>
            <p class="menu-border">Jadwal Dokter</p>
            <p class="menu-border">Berita</p>
        </div>
    </div>
    
    <div class="min-vh-100 position-relative" style="z-index: 10;">
        <img id="img-slider" class="h-100 w-100" src="<?= base_url('asset/image_4.png');?>">
        <div class="slider-overlay d-flex flex-column align-items-center">
            <div class="d-flex flex-column">
                <h1 class="slider-heading">FOKUS UTAMA UNTUK KESEHATAN MATA ANDA</h1>
                <p class="slider-text">Jadwalkan waktu anda untuk periksa maupun konsultasi pada klinik kami, dengan klik booking dibawah ini</p>
            </div>
            <button class="booking-btn">
                <i class="fa-regular fa-calendar me-1"></i>
                Booking
            </button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
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