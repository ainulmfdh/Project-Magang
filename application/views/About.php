<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata dr. Sjamsu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .about {
            padding: 10px;
            justify-content: center;
        }

        #card-about {
            width: 100%;
            max-width: 425px;
            /* width: 22rem; */
            border-radius: 10px;
            padding: 5px;
            background: rgba(212, 212, 212, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
            align-items: center;
        }

        #card-about img {
            width: 100%;
        }

        .card-body {
            margin-left: 10px;
        }

        .btn-location {
            gap: 5px;
            margin-top: 10px;
            margin-bottom: 5px;
            padding: 10px 15px;
            font-weight: 500;
            color: white;
            background: rgba(0, 170, 181, 1);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: rgba(0, 150, 160, 1);
        }

        .card {
            width: 100%;
            max-width: 410px;
            padding: 10px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin: auto;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 150px; 
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card-title {
            font-size: 24px;
            font-weight: semibold;
            margin-bottom: 30px;
        }

        .card-text {
            font-size: 14px;
            color: #555;
            display: inline;
            margin-right: 7px;
        }

        .text-body-secondary {
            font-size: 12px;
            color: #888;
        }

       
        .btn-jadwal{
            margin-top: 10px;
            padding: 10px 15px;
            font-weight: 400;
            color: white;
            background: rgba(0, 170, 181, 1);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s ease;
            display: flex;
            justify-content: flex-end;
        }
        .btn-jadwal i{
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="about">
    <h2 class="fw-semibold fs-1 text-center">Klinik Mata dr. Sjamsu</h2>

    <div id="card-about" class="mt-4 mb-3">
        <img src="<?= base_url('asset/images/about.png') ?>" class="card-img-top" alt="Klinik Mata">
        <div class="card-body">
            <button class="btn-location">Our Location <i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
    </div>
</div>

<div class="card d-flex flex-row mb-2 mt-5">
    <img src="<?= base_url('asset/images/doctor.png') ?>" alt="Gambar">
    <div class="card-body">
        <h1 class="card-title">Jam Operasional</h1>
        <div class="jadwal">
        <p class="card-text">Senin - Jumat &nbsp;&nbsp; 09:00 - 12:00</p>
        <br>
        <p class="card-text">Sabtu  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 09:00 - 12:00</p>
        <br>
        <p class="card-text">Minggu/Hari Libur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tutup</p>
            <button class="btn-jadwal" ><i class="fa-regular fa-calendar"></i> Jadwal</i></button>
        </div>
        
    </div>
</div>

</body>
</html>