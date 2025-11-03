<?php include "layout/head.php" ?>

<body style="position: relative;" data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="100">

<?php include "layout/navbar.php" ?>

<main>
    <section class="img-hero-2 bg-body-tertiary" data-aos="fade-up">
        <div class="hero-2">
            <div class="container-fluid hero-2-fl">
                <div class="container d-flex align-items-center justify-content-center h-100 flex-column">
                    <h1 class="display-4 fw-bold hero-title" data-aos="fade-up" data-aos-delay="100">Hubungi <span class="teg">Kami</span></h1>
                    <p class="lead text-center" data-aos="fade-up" data-aos-delay="200">Akses informasi tercepat ke tim SMKS Pasundan Subang.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                <li class="breadcrumb-item"><a href="beranda.php" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
            </ol>
        </nav>
    </div>

    <section id="info-cepat" class="py-5 bg-light">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Akses <span class="teg">Informasi</span> Langsung</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Cara terbaik untuk menghubungi manajemen, administrasi, dan tim PPDB kami.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 shadow-lg bg-white rd-20 h-100 border-start border-4 border-main">
                        <i class="bi bi-geo-alt-fill fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Alamat Fisik</h4>
                        <p class="text-muted mb-0">Jl. Bagus Yabin No.06, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211</p>
                        <a href="lokasi.php" class="small txt-main mt-2 d-block text-decoration-none">Lihat di Peta & Panduan Rute</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 shadow-lg bg-white rd-20 h-100 border-start border-4 border-main">
                        <i class="bi bi-clock-fill fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Jam Pelayanan Kantor</h4>
                        <p class="text-muted mb-1">**Senin - Jumat:** 08.00 - 15.00 WIB</p>
                        <p class="text-muted mb-0">**Sabtu & Minggu:** Tutup</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4 shadow-lg bg-white rd-20 h-100 border-start border-4 border-main">
                        <i class="bi bi-headset fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Telepon & Email</h4>
                        <p class="text-muted mb-1"><i class="bi bi-telephone-fill me-2 txt-main"></i> (0260) 411778</p>
                        <p class="text-muted mb-0"><i class="bi bi-envelope-fill me-2 txt-main"></i> info@namasekolah.sch.id</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-hero-split">
        <div class="container">
            <div class="row g-5 align-items-stretch">
                
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-highlight-card">
                        <h2 class="txt-judul fw-bold mb-3"><span class="teg">Layanan</span> Kontak Cepat</h2>
                        <p class="lead mb-4 text-muted">Cara tercepat untuk mendapatkan bantuan langsung dari tim kami.</p>
                        
                        <div class="mb-4">
                            <h4 class="mb-2"><i class="bi bi-telephone-fill me-2 txt-main"></i> Hotline Sekolah</h4>
                            <p class="ps-4 text-muted">(0260) 411778 (Jam Kerja)</p>
                        </div>
                        
                        <div class="mb-4">
                            <h4 class="mb-2"><i class="bi bi-person-fill me-2 txt-main"></i> Kontak PPDB</h4>
                            <p class="ps-4 text-muted">Hubungi bagian pendaftaran untuk info biaya dan jadwal.</p>
                        </div>

                        <a href="https://wa.me/NOMORWA" target="_blank" class="btn btn-whatsapp-large w-100 mt-4">
                            <i class="bi bi-whatsapp me-2"></i> Chat Via WhatsApp
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 d-flex align-items-center" data-aos="fade-left">
                    <div class="contact-quick-form w-100">
                        <h2 class="txt-judul text-white fw-bold mb-4">Tulis <span class="text-white">Pesan</span> Anda</h2>
                        <form action="kirim_pesan.php" method="POST">
                            <div class="mb-3">
                                <label for="nama_quick" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_quick" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="email_quick" class="form-label">Email / HP</label>
                                <input type="text" class="form-control" id="email_quick" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subjek_quick" class="form-label">Subjek</label>
                                <select class="form-select" id="subjek_quick" name="subjek" required>
                                    <option selected disabled>Pilih Kategori</option>
                                    <option value="PPDB">Pendaftaran Siswa Baru</option>
                                    <option value="Kemitraan">Kerjasama Mitra Industri</option>
                                    <option value="Umum">Pertanyaan Umum</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pesan_quick" class="form-label">Pesan Anda</label>
                                <textarea class="form-control" id="pesan_quick" name="pesan" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-second btn-lg px-5 mt-2">Kirim Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-full-section">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h2 class="txt-judul fw-bold">Lokasi <span class="teg">Pasti</span> Kami</h2>
            </div>
            
            <div class="map-full-embed shadow-lg" data-aos="zoom-in" data-aos-delay="200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.750596041214!2d107.75844197370506!3d-6.553138864058927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693ca23fd3eef5%3A0x49a784f2590a1e41!2sSMKS%20Pasundan%20Subang!5e0!3m2!1sid!2sid!4v1762116429140!5m2!1sid!2sid" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="text-center mt-4">
                <a href="lokasi.php" class="btn btn-second btn-lg px-5 py-3" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-compass-fill me-2"></i> Buka Peta Besar Interaktif
                </a>
            </div>
        </div>
    </section>
    
    <section class="py-5 bg-main text-center" data-aos="fade-up">
        <div class="container py-4">
            <div class="col-lg-9 mx-auto">
                <h2 class="txt-judul text-white" data-aos="fade-up" data-aos-delay="100">Ikuti Kami di Media Sosial</h2>
                <p class="lead mb-4 text-white" data-aos="fade-up" data-aos-delay="200">Dapatkan update cepat, galeri kegiatan, dan pengumuman melalui saluran resmi kami.</p>
                
                <div data-aos="zoom-in" data-aos-delay="300">
                    <a href="#" class="text-white text-decoration-none fs-1 me-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white text-decoration-none fs-1 me-4"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white text-decoration-none fs-1 me-4"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="text-white text-decoration-none fs-1"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include "layout/footer.php" ?>
<?php include "layout/foot.php" ?>