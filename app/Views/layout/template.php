<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IkanKU - Pencari Ikan Handal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://www.googleapis.com/css2?family=Almendra+SC&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --font-judul: 'Almendra SC', serif; 
            --font-teks: 'IM Fell English SC', serif;
            --warna-hijau-dasar: #1E422A;  
            --warna-hijau-magis: #98FB98;   
            --warna-gelombang-hijau: #4A7856; 
            --warna-teks-terang: #F0EAD6;
            --warna-latar: #EDF2F1;;
            --warna-teks-konten: #4B3A26;
        }

        body {
            background-image: url('/img/bg.png');
            background-color: var(--warna-latar);
            font-family: var(--font-teks);
            color: var(--warna-teks-konten);
            background-repeat: repeat;
            background-size: 150px;
        }

        .navbar-tavern {
            background-image: url('https://www.transparenttextures.com/patterns/forest.png');
            background-color: var(--warna-hijau-dasar);
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            position: relative;
            z-index: 100;
        }

        .navbar-tavern::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 10px;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 10'%3e%3cpath d='M0,5 Q12.5,0 25,5 T50,5 T75,5 T100,5' stroke='%234A7856' stroke-width='3' fill='none' /%3e%3c/svg%3e");
            background-size: 50px 10px;
        }

        .navbar-tavern .navbar-brand {
            font-family: var(--font-judul);
            font-size: 2.5rem;
            color: var(--warna-teks-terang);
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .navbar-tavern .nav-link {
            font-family: var(--font-teks);
            font-size: 1.2rem;
            color: var(--warna-teks-terang);
            text-transform: uppercase;
            margin: 0 1rem;
            transition: all 0.3s ease;
        }

        .navbar-tavern .nav-link:hover,
        .navbar-tavern .nav-link.active {
            color: var(--warna-hijau-magis);
        }
        
        .navbar-toggler {
            border-color: rgba(152, 251, 152, 0.5);
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(240, 234, 214, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .main-content {
            min-height: 80vh; 
            padding-top: 1rem;
        }
        
        .parchment-box {
            background-color: rgba(255, 253, 247, 0.85);
            border: 2px solid #A0522D;
            border-radius: 5px;
            padding: 2.5rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
        }

        .saloon-title {
            font-family: var(--font-judul);
            color: var(--warna-hijau-dasar);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        
        .footer-tavern {
            background-image: url('https://www.transparenttextures.com/patterns/forest.png');
            background-color: var(--warna-hijau-dasar);
            color: var(--warna-teks-terang);
            padding: 2.5rem 0 2rem 0;
            margin-top: 4rem;
            box-shadow: 0 -4px 10px rgba(0,0,0,0.3);
            position: relative;
        }
        
        .footer-tavern::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 0;
            width: 100%;
            height: 10px;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 10'%3e%3cpath d='M0,5 Q12.5,10 25,5 T50,5 T75,5 T100,5' stroke='%234A7856' stroke-width='3' fill='none' /%3e%3c/svg%3e");
            background-size: 50px 10px;
        }

        .footer-tavern h5 {
            font-family: var(--font-judul);
            color: var(--warna-hijau-magis);
        }
        
        .footer-tavern .social-icon {
            font-size: 1.8rem;
            color: var(--warna-teks-terang);
            margin: 0 0.75rem;
            transition: all 0.3s ease;
        }

        .footer-tavern .social-icon:hover {
            color: var(--warna-hijau-magis);
            transform: scale(1.1);
        }

        .footer-tavern .copyright {
            font-size: 0.9rem;
            letter-spacing: 1px;
            opacity: 0.8;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-tavern">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-left: 1rem;" href="/">I k a n K U</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/acara">Event</a>
                    </li>
                    <li class.nav-item">
                        <a class="nav-link" href="/kontak">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5 main-content">
        <div class="text-center parchment-box">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <footer class="footer-tavern text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Ikuti Petualangan Kami</h5>
                    <div class="social-links my-3">
                        <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-tiktok"></i></a>
                    </div>
                    <p class="copyright mt-4">&copy; 2025 IkanKU. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
