<?php include "layout/head.php" ?>

<body style="position: relative;" data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="100">

<?php include "layout/navbar.php" ?>

<main>
    <section class="img-hero-2 bg-body-tertiary" data-aos="fade-up">
        <div class="hero-2">
            <div class="container-fluid hero-2-fl">
                <div class="container d-flex align-items-center justify-content-center h-100 flex-column">
                    <h1 class="display-4 fw-bold hero-title" data-aos="fade-up" data-aos-delay="100">Kegiatan <span class="teg">Siswa</span> & Ekskul</h1>
                    <p class="lead text-center" data-aos="fade-up" data-aos-delay="200">Wadah pengembangan minat, bakat, dan karakter kepemimpinan.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                <li class="breadcrumb-item"><a href="beranda.php" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item">Informasi</li>
                <li class="breadcrumb-item active" aria-current="page">Kegiatan Siswa</li>
            </ol>
        </nav>
    </div>
    ---

    <section id="pengantar" class="py-5">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Temukan Bakatmu di <span class="teg">Ekskul</span> Kami</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Selain kompetensi keahlian, kami mendorong siswa untuk berprestasi di bidang non-akademik melalui berbagai pilihan kegiatan.</p>
            </div>
            
            <ul class="nav nav-tabs justify-content-center mb-5" id="ekskulTabs" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="organisasi-tab" data-bs-toggle="tab" data-bs-target="#organisasi" type="button" role="tab" aria-controls="organisasi" aria-selected="true">Organisasi & Sosial</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="olahraga-tab" data-bs-toggle="tab" data-bs-target="#olahraga" type="button" role="tab" aria-controls="olahraga" aria-selected="false">Olahraga & Bela Diri</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="seni-tab" data-bs-toggle="tab" data-bs-target="#seni" type="button" role="tab" aria-controls="seni" aria-selected="false">Seni & Budaya</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="keagamaan-tab" data-bs-toggle="tab" data-bs-target="#keagamaan" type="button" role="tab" aria-controls="keagamaan" aria-selected="false">Keagamaan & Khusus</button>
                </li>
            </ul>
        </div>
    </section>
    ---

    <section id="daftar-ekskul" class="py-5 bg-light">
        <div class="container">
            <div class="tab-content" id="ekskulTabsContent">
                
                <div class="tab-pane fade show active" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                    <h3 class="fw-bold txt-judul mb-4 text-center">Organisasi & Kepemimpinan</h3>
                    <div class="row g-4 justify-content-center">
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-person-badge-fill fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">OSIS</h5>
                                <p class="text-muted small">Wadah kepemimpinan siswa, melatih manajemen acara dan organisasi.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-bandaid-fill fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">PMR</h5>
                                <p class="text-muted small">Palang Merah Remaja, fokus pada pertolongan pertama dan kesehatan sosial.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-flag-fill fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">PASKIBRA</h5>
                                <p class="text-muted small">Baris-berbaris, kedisiplinan, dan upacara bendera.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-compass-fill fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">Pramuka</h5>
                                <p class="text-muted small">Kepramukaan dan keterampilan bertahan hidup di alam terbuka.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="olahraga" role="tabpanel" aria-labelledby="olahraga-tab">
                    <h3 class="fw-bold txt-judul mb-4 text-center">Olahraga & Bela Diri</h3>
                    <div class="row g-4 justify-content-center">
                         <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-controller fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">Futsal</h5>
                                <p class="text-muted small">Latihan taktik dan fisik untuk kompetisi Futsal antar sekolah.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>
                         <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-globe2 fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">Bola Voli</h5>
                                <p class="text-muted small">Mengembangkan kerjasama tim dan kemampuan smash/block.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-activity fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">Muaythai</h5>
                                <p class="text-muted small">Bela diri, fokus pada disiplin, fisik, dan teknik dasar Muaythai.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="seni" role="tabpanel" aria-labelledby="seni-tab">
                    <h3 class="fw-bold txt-judul mb-4 text-center">Seni & Budaya</h3>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-music-note-list fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">Akustik Band</h5>
                                <p class="text-muted small">Grup musik akustik untuk mengembangkan bakat musikal dan penampilan publik.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-people-fill fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">Tari Tradisional</h5>
                                <p class="text-muted small">Pelestarian dan pementasan tari-tarian tradisional daerah Jawa Barat.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 shadow-sm rd-10 p-3 text-center">
                                <i class="bi bi-soundwave fs-1 txt-main mb-3"></i>
                                <h5 class="fw-bold">Karawitan</h5>
                                <p class="text-muted small">Pelatihan alat musik gamelan dan seni suara Sunda.</p>
                                <a href="#" class="btn btn-second btn-sm mt-2">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="keagamaan" role="tabpanel" aria-labelledby="keagamaan-tab">
                    <h3 class="fw-bold txt-judul mb-4 text-center">Keagamaan & Khusus</h3>
                    <p class="text-center text-muted py-5" data-aos="fade-up">Kegiatan Khusus seperti OSN (Olimpiade Sains Nasional) dan kelompok Tahfidz Al-Qur'an berada di bawah koordinasi Kurikulum.</p>
                </div>
            </div>
        </div>
    </section>
    ---

    <section class="py-5 bg-main text-center" data-aos="fade-up">
        <div class="container py-4">
            <div class="col-lg-9 mx-auto">
                <h2 class="txt-judul text-white" data-aos="fade-up" data-aos-delay="100">Siap Mengembangkan Bakatmu?</h2>
                <p class="lead mb-4 text-white" data-aos="fade-up" data-aos-delay="200">Keseimbangan antara akademik dan kegiatan non-akademik adalah kunci sukses lulusan vokasi.</p>
                <a href="kontak_kami.php" class="btn btn-lig btn-lg px-5 py-3" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bi bi-calendar-check-fill me-2"></i> Tanya Jadwal Latihan
                </a>
            </div>
        </div>
    </section>
    </main>

<?php include "layout/footer.php" ?>
<?php include "layout/foot.php" ?>