<?php
    // Diasumsikan file ini berisi variabel-variabel yang dibutuhkan.
    // require 'SMPN 1 Candi.php';

    // Placeholder data jika file tidak ada, agar tidak terjadi error.
    $beranda = isset($beranda) ? $beranda : "Selamat datang di website resmi kami. Sekolah unggulan dengan komitmen untuk pendidikan berkualitas.";
    $visi_misi = isset($visi_misi) ? $visi_misi : ['Cerdas, Berkarakter, dan Berwawasan Global'];
    $fisi_msii = isset($fisi_msii) ? $fisi_msii : ['visi.jpg', './img/misi.jpg'];
    $fotofasilitas = isset($fotofasilitas) ? $fotofasilitas : ['./img/lapangan.jpg', './img/masjid.jpg', './img/kantin.jpg', './img/aula.jpg'];
    $fasilitas = isset($fasilitas) ? $fasilitas : ['Lapangan', 'Masjid', 'Kantin', 'Aula'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 1 Candi Sidoarjo - Unggul dalam Prestasi dan Karakter</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="_488bf90c-b1a3-46a8-9da7-cfbd6e91c783.ico" type="image/x-icon">
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons for Hamburger Menu -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
        /* === CSS Variables & Base Styles === */
        :root {
            --primary-color: #003366; /* Biru Tua Khas Sekolah */
            --secondary-color: #FFD700; /* Aksen Emas */
            --bg-color: #F8F9FA; /* Latar Belakang Putih Kebiruan */
            --text-color: #343A40; /* Teks Gelap */
            --heading-color: #002142;
            --white-color: #FFFFFF;
            --border-color: #DEE2E6;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --nav-height: 70px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.7;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        section {
            padding: 80px 0;
        }

        h2 {
            font-size: 2.5rem;
            color: var(--heading-color);
            text-align: center;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .section-subtitle {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 3rem auto;
            color: #6c757d;
        }

        /* === Header & Navigation === */
        #header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: var(--nav-height);
            z-index: 1000;
            transition: background-color 0.4s, box-shadow 0.4s;
        }

        #header.scrolled {
            background-color: var(--white-color);
            box-shadow: 0 2px 15px var(--shadow-color);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
        }
        
        .nav-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--white-color);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        #header.scrolled .nav-logo {
            color: var(--primary-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            color: var(--white-color);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: color 0.3s;
        }
        
        #header.scrolled .nav-links a {
            color: var(--text-color);
        }
        
        .nav-links a:hover, #header.scrolled .nav-links a:hover {
            color: var(--secondary-color);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--secondary-color);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            font-size: 2rem;
            color: var(--white-color);
            cursor: pointer;
            z-index: 1001;
        }

        #header.scrolled .menu-toggle {
            color: var(--primary-color);
        }
        
        /* === Hero Section === */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('WhatsApp-Image-2022-08-08-at-17.00.49-1024x768.jpeg') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--white-color);
            padding: 0 5%;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin-bottom: 2rem;
        }

        .cta-button {
            background-color: var(--secondary-color);
            color: var(--heading-color);
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
        }

        /* === Card Styles (for Visi-Misi & Fasilitas) === */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .card {
            background-color: var(--white-color);
            border-radius: 12px;
            box-shadow: 0 4px 20px var(--shadow-color);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 1.5rem;
        }
        
        .card-content h3 {
            color: var(--heading-color);
            margin-bottom: 0.5rem;
            font-size: 1.4rem;
        }

        /* === Visi Misi Section === */
        #misi .card-grid {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            max-width: 900px;
            margin: 0 auto;
        }

        /* === Contact Form === */
        #kontak {
            background-color: var(--white-color);
        }
        .contact-form {
            max-width: 700px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        .contact-form input:focus, .contact-form textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 8px rgba(0, 51, 102, 0.2);
        }
        
        .contact-form button {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: var(--heading-color);
        }

        /* === Footer === */
        footer {
            background-color: var(--primary-color);
            color: var(--white-color);
            text-align: center;
            padding: 2rem 0;
        }

        footer a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
        }

        /* === Responsive Design === */
        @media (max-width: 768px) {
            h2 { font-size: 2rem; }
            .hero h1 { font-size: 2.5rem; }

            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                height: 100vh;
                background-color: var(--white-color);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 2rem;
                transition: right 0.5s cubic-bezier(0.77, 0, 0.175, 1);
                box-shadow: -10px 0 30px var(--shadow-color);
            }
            
            .nav-links.active {
                right: 0;
            }

            .nav-links a, #header.scrolled .nav-links a {
                color: var(--text-color);
            }
            
            .menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>

<header id="header">
    <div class="container navbar">
        <a href="#beranda" class="nav-logo">SMPN 1 Candi</a>
        <ul class="nav-links" id="nav-menu">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#misi">Visi-Misi</a></li>
            <li><a href="#fasilitas">Fasilitas</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
        <div class="menu-toggle" id="menu-toggle">
            <i class="ph ph-list"></i>
        </div>
    </div>
</header>

<main>
    <div class="hero" id="beranda">
        <h1>SMPN 1 Candi Sidoarjo</h1>
        <p><?=$beranda ?></p>
        <a href="#tentang" class="cta-button">Pelajari Lebih Lanjut</a>
    </div>

    <section id="tentang">
       <div class="container">
            <h2>Tentang Sekolah</h2>
            <p class="section-subtitle">
                SMPN 1 Candi merupakan salah satu sekolah menengah pertama unggulan di Kabupaten Sidoarjo 
                yang dikenal dengan prestasi akademik dan non-akademik yang gemilang. 
                Sejak awal berdiri, SMPN 1 Candi telah berkomitmen untuk menyediakan pendidikan berkualitas bagi siswa-siswinya.
            </p>
            <p style="text-align: center;">Dengan berbagai fasilitas yang memadai dan tenaga pengajar yang profesional, sekolah ini terus berkembang dan berhasil mencetak lulusan-lulusan yang berprestasi di berbagai bidang. 
            Selain fokus pada akademik, SMPN 1 Candi Sidoarjo juga aktif dalam berbagai kegiatan ekstrakurikuler untuk mengembangkan potensi siswa secara menyeluruh.
            </p>
       </div>
    </section>
    
    <section id="misi" style="background-color: var(--white-color);">
        <div class="container">
            <h2>Visi & Misi</h2>
            <p class="section-subtitle">
                Dengan komitmen tinggi, kami membentuk generasi yang <?=$visi_misi[0]?> melalui visi dan misi yang jelas dan terarah.
            </p>
            <div class="card-grid">
                <div class="card">
                    <img src="https://placehold.co/600x400/003366/FFFFFF?text=Visi" alt="Gambar Visi Sekolah">
                    <div class="card-content">
                        <h3>Visi</h3>
                        <p>Berakhlak Mulia, Berprestasi, Peduli, Dan Berbudaya Lingkungan Hidup</p>
                    </div>
                </div>
                
                <div class="card">
                    <img src="https://placehold.co/600x400/002142/FFFFFF?text=Misi" alt="Gambar Misi Sekolah">
                    <div class="card-content">
                        <h3>Misi</h3>
                        <p>Mengembangkan pembelajaran aktif dan kreatif, menanamkan nilai-nilai religius dan budi pekerti, serta menciptakan lingkungan belajar yang asri.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fasilitas">
    <div class="container">
        <h2>Fasilitas Sekolah</h2>
        <p class="section-subtitle">
            Kami menyediakan berbagai fasilitas yang lengkap dan modern untuk menunjang proses belajar mengajar yang efektif dan nyaman.
        </p>
        <div class="card-grid">
            <?php for($i = 0; $i < 4; $i++): ?>
            <div class="card">
                <img src="<?= $fotofasilitas[$i] ?>" alt="Foto <?= $fasilitas[$i] ?>">
                <div class="card-content">
                    <h3><?= $fasilitas[$i] ?></h3>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>


    <section id="kontak">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <p class="section-subtitle">Punya pertanyaan atau ingin informasi lebih lanjut? Silakan isi formulir di bawah ini.</p>
            <form class="contact-form">
                <input type="text" id="name" name="name" placeholder="Nama Lengkap Anda" required>
                <input type="email" id="email" name="email" placeholder="Alamat Email Anda" required>
                <textarea id="message" name="message" rows="5" placeholder="Tuliskan pesan Anda di sini" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <p>&copy; <?= date("Y") ?> SMPN 1 Candi Sidoarjo. Website By <a href="../index.html" target="_blank">Rizkyan</a></p>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.getElementById('header');
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.getElementById('nav-menu');

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            const icon = menuToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('ph-list');
                icon.classList.add('ph-x');
            } else {
                icon.classList.remove('ph-x');
                icon.classList.add('ph-list');
            }
        });

        // Close menu when a link is clicked
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    menuToggle.querySelector('i').classList.replace('ph-x', 'ph-list');
                }
            });
        });
    });
</script>
</body>
</html>
