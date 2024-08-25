<?php
    require'SMPN 1 Candi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 1 Candi Sidoarjo</title>
    <link rel="stylesheet" href="style.css">
</head>
<div>
       
    <header id="beranda">
    <nav>
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href ="#misi">Misi-Visi</a></li>
                <li><a href="#fasilitas">Fasilitas</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>SMPN 1 Candi Sidoarjo</h1>
            <p><?=$beranda ?></p>
            <a href="#tentang" class="cta-button">Pelajari Lebih Lanjut</a>
        </div>
    </header>

    <section id="tentang">
       <h2>Tentang Sekolah</h2>
        <p>SMPN 1 Candi merupakan salah satu sekolah menengah pertama unggulan di Kabupaten Sidoarjo 
            yang dikenal dengan prestasi akademik dan non-akademik yang gemilang. 
            Sejarah SMPN 1 Candi Sidoarjo dimulai sejak didirikannya sekolah ini pada tahun 1977. 
            Sejak awal berdiri, SMPN 1 Candi telah berkomitmen untuk menyediakan pendidikan berkualitas bagi siswa-siswinya. 
            Dengan berbagai fasilitas yang memadai dan tenaga pengajar yang profesional, sekolah ini terus berkembang dan berhasil mencetak lulusan-lulusan yang berprestasi di berbagai bidang.
            Selain fokus pada akademik, SMPN 1 Candi Sidoarjo juga aktif dalam berbagai kegiatan ekstrakurikuler, seperti olahraga, seni, dan organisasi siswa. 
            Hal ini bertujuan untuk mengembangkan potensi siswa secara menyeluruh, baik dari segi intelektual maupun karakter.
            Secara keseluruhan, SMPN 1 Candi Sidoarjo terus berupaya untuk menjadi sekolah unggulan yang menghasilkan siswa-siswi berprestasi, 
            baik di tingkat lokal, nasional, maupun internasional. 
        </p>
        </section>
    <div class="misi">
    <section id="misi">
       <h2>Misi-Visi</h2>
        <p>SMPN 1 Candi merupakan salah satu sekolah menengah pertama unggulan di Kabupaten Sidoarjo 
            yang dikenal dengan prestasi akademik dan non-akademik yang gemilang. 
            Dengan fasilitas yang lengkap dan tenaga pengajar yang berkompeten, 
            SMPN 1 Candi terus berkomitmen untuk memberikan pendidikan terbaik kepada siswa-siswinya, 
            serta membentuk generasi yang <?=$visi_misi[0]?>
        <div>
            </div>
            <div class="fasilitas-grid">
            <div class="fasilitas-item">
                <img src="img/<?=$fisi_msii[0];?>" alt="">
                <div class="fasilitas-text">
                    <p>Visi</p>
                </div>
            </div>
            
            <div class="fasilitas-item">
                <img src="img/<?=$fisi_msii[1];?>" alt="">
                <div class="fasilitas-text">
                    <p>Misi</p>
                </div>
            </div>
            </div>
        </p>
            
        </section>
    </div>
    <section id="fasilitas">
    <div class="fasilitas">
        <h2>Fasilitas</h2>
        <p>SMPN 1 candi Sidoarjo merupakan salah satu sekolah favorit di Sidoarjo,
            SMPN 1 candi juga memiliki beberapa fasilitas yang cukup mempuni.
        </p>
    </div>
        <div class="fasilitas-grid">
            <div class="fasilitas-item">
                <img src="img/<?=$fotofasilitas[0];?>" alt="">
                <div class="fasilitas-text">
                    <p><?=$fasilitas[0]?></p>
                </div>
            </div>
            <div class="fasilitas-item">
                <img src="img/<?=$fotofasilitas[1];?>" alt="">
                <div class="fasilitas-text">
                    <p><?=$fasilitas[1]?></p>
                </div>
            </div>
            <div class="fasilitas-item">
                <img src="img/<?=$fotofasilitas[2];?>" alt="">
                <div class="fasilitas-text">
                    <p><?=$fasilitas[2]?></p>
                </div>
            </div>
            <div class="fasilitas-item">
                <img src="img/<?=$fotofasilitas[3];?>" alt="">
                <div class="fasilitas-text">
                    <p><?=$fasilitas[3]?></p>
                </div>
            </div>
        </div>
        
</section>


    <section id="kontak">
        <h2>Kontak</h2>
        <form>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message"></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </section>

    <footer>
        <p>&copy;  SMPN 1 Candi Sidoarjo. Website By Rizkyan</p>
    </footer>
</body>
</html>
