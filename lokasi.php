<?php include "layout/head.php" ?>

<body style="position: relative;" data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="100">

<?php include "layout/navbar.php" ?>

<main>
    <section class="img-hero-2 bg-body-tertiary" data-aos="fade-up">
        <div class="hero-2">
            <div class="container-fluid hero-2-fl">
                <div class="container d-flex align-items-center justify-content-center h-100 flex-column">
                    <h1 class="display-4 fw-bold hero-title" data-aos="fade-up" data-aos-delay="100">Lokasi & <span class="teg">Aksesibilitas</span></h1>
                    <p class="lead text-center" data-aos="fade-up" data-aos-delay="200">Temukan lokasi strategis SMKS Pasundan Subang.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                <li class="breadcrumb-item"><a href="beranda.php" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item">Profile</li>
                <li class="breadcrumb-item active" aria-current="page">Lokasi</li>
            </ol>
        </nav>
    </div>
    ---

    <section id="peta" class="py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="txt-judul fw-bold mb-4"><span class="teg">Peta</span> Lokasi Sekolah</h2>
                    <div class="embed-responsive embed-responsive-16by9 ratio ratio-16x9 shadow-lg rd-10" style="min-height: 450px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.750596041214!2d107.75844197370506!3d-6.553138864058927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693ca23fd3eef5%3A0x49a784f2590a1e41!2sSMKS%20Pasundan%20Subang!5e0!3m2!1sid!2sid!4v1762116429140!5m2!1sid!2sid" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left">
                    <h2 class="txt-judul fw-bold mb-4">Informasi <span class="teg">Detail</span></h2>
                    
                    <div class="card shadow-sm h-100 p-4 rd-10 bg-light">
                        <div class="card-body">
                            <p class="lead fw-bold txt-dark">Alamat Lengkap:</p>
                            <p class="text-muted mb-4">
                                <i class="bi bi-geo-alt-fill txt-main me-2"></i> 
                                Jl. Bagus Yabin No.06, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211
                            </p>
                            
                            <p class="lead fw-bold txt-dark">Kontak Cepat:</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-telephone-fill txt-main me-2"></i> (0260) 411778</li>
                                <li class="mb-2"><i class="bi bi-envelope-fill txt-main me-2"></i> info@namasekolah.sch.id</li>
                            </ul>
                            
                            <a href=https://www.google.com/maps/place/SMKS+Pasundan+Subang/@-6.5531389,107.758442,17z/data=!3m1!4b1!4m6!3m5!1s0x2e693ca23fd3eef5:0x49a784f2590a1e41!8m2!3d-6.5531442!4d107.7610169!16s%2Fg%2F11gzkv2_v?entry=ttu&g_ep=EgoyMDI1MTAyOS4yIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-main w-100 mt-3">
                                <i class="bi bi-compass me-2 text-light"></i> Buka di Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ---

    <section id="keunggulan" class="py-5 bg-light">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Keunggulan <span class="teg">Lokasi</span> Sekolah</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Lokasi kami dirancang untuk mendukung pembelajaran yang aman dan mudah diakses.</p>
            </div>
            
            <div class="row g-4 text-center">
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 shadow-sm bg-white rd-10 h-100">
                        <i class="bi bi-building-fill-check fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Akses Industri</h4>
                        <p class="text-muted">Dekat dengan zona industri dan kantor perusahaan mitra untuk magang dan kunjungan. </p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 shadow-sm bg-white rd-10 h-100">
                        <i class="bi bi-geo-alt fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Pusat Kota Subang</h4>
                        <p class="text-muted">Berada di lokasi strategis Subang Kota, memudahkan akses transportasi umum dan layanan esensial.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4 shadow-sm bg-white rd-10 h-100">
                        <i class="bi bi-shield-lock-fill fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Lingkungan Aman</h4>
                        <p class="text-muted">Jauh dari keramaian dan lalu lintas padat, menciptakan suasana belajar yang fokus dan nyaman.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    ---

    <section id="akses" class="py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <h2 class="txt-judul fw-bold mb-4">Panduan <span class="teg">Aksesibilitas</span></h2>
                    <p class="lead text-muted">Berikut panduan untuk mencapai lokasi kami menggunakan berbagai moda transportasi:</p>
                    
                    <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                        <h5 class="fw-bold mt-4"><i class="bi bi-bus-front-fill txt-main me-2"></i> Transportasi Umum</h5>
                        <p class="text-muted">Dari Terminal Subang, ambil angkot jalur 08 (Jurusan Cigadung) dan turun tepat di depan gerbang sekolah (Waktu tempuh: 15-20 menit).</p>
                    </div>
                    
                    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                        <h5 class="fw-bold"><i class="bi bi-car-front-fill txt-main me-2"></i> Kendaraan Pribadi</h5>
                        <p class="text-muted">Dari pusat kota, ikuti Jalan Bagus Yabin ke arah selatan. Sekolah berada 500 meter setelah Tugu Kujang Subang di sisi kanan jalan.</p>
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="300">
                        <h5 class="fw-bold"><i class="bi bi-p-circle-fill txt-main me-2"></i> Area Parkir</h5>
                        <p class="text-muted">Tersedia area parkir yang luas dan aman untuk mobil dan motor di dalam lingkungan sekolah.</p>
                    </div>
                </div>
                
                <div class="col-lg-6 order-lg-1 d-flex justify-content-center" data-aos="fade-right">
                    
                    <img src="assets/img/konten/GPS.png" class="img-fluid rd-20 shadow-lg" alt="Ilustrasi panduan rute">
                </div>
            </div>
        </div>
    </section>
    ---

    <section class="py-5 bg-main text-center" data-aos="fade-up">
        <div class="container py-4">
            <div class="col-lg-9 mx-auto">
                <h2 class="txt-judul text-light" data-aos="fade-up" data-aos-delay="100">Kunjungi Kami Secara Langsung</h2>
                <p class="lead mb-4 text-light" data-aos="fade-up" data-aos-delay="200">Rasakan langsung suasana belajar di SMKS Pasundan Subang. Hubungi kami untuk jadwal tur.</p>
                <a href="kontak_kami.php" class="btn btn-lig btn-lg px-5 py-3" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bi bi-calendar-check-fill me-2"></i> Atur Jadwal Kunjungan
                </a>
            </div>
        </div>
    </section>
    </main>

<?php include "layout/footer.php" ?>
<?php include "layout/foot.php" ?>
</body>
</html>