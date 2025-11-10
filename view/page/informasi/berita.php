
<main>

    <?php

        $judul_hero1="Berita & ";
        $judul_hero2="Pengumuman";

        $subjudul_hero="Dapatkan informasi terbaru mengenai kegiatan dan prestasi SMKS Pasundan Subang.";

    ?>

    <?php include "view/layout/hero.php"; ?>

    <section id="daftar-berita" class="py-5 bg-light">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Berita <span class="teg">Terbaru</span> Kami</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Jelajahi berbagai kategori informasi sekolah.</p>
            </div>

            <ul class="nav nav-tabs justify-content-center mb-5" id="beritaTabs" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="semua-tab" data-bs-toggle="tab" data-bs-target="#semua" type="button" role="tab" aria-controls="semua" aria-selected="true">Semua</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="prestasi-tab" data-bs-toggle="tab" data-bs-target="#prestasi" type="button" role="tab" aria-controls="prestasi" aria-selected="false">Prestasi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="kegiatan-tab" data-bs-toggle="tab" data-bs-target="#kegiatan" type="button" role="tab" aria-controls="kegiatan" aria-selected="false">Kegiatan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pengumuman-tab" data-bs-toggle="tab" data-bs-target="#pengumuman" type="button" role="tab" aria-controls="pengumuman" aria-selected="false">Pengumuman</button>
                </li>
            </ul>

            <div class="tab-content" id="beritaTabsContent">
                
                <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="semua-tab">
                    <div class="row g-4">
                        
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 shadow-sm rd-10 border-0 p-3">
                                <img src="assets/img/berita/berita1.jpg" class="card-img-top rd-10" alt="Juara LKS">
                                <div class="card-body p-3">
                                    <span class="badge bg-main bg-opacity-10 txt-main mb-2">Prestasi</span>
                                    <h5 class="card-title fw-bold">Siswa RPL Raih Juara 1 LKS Tingkat Provinsi Bidang Web Development</h5>
                                    <p class="card-text text-muted small">24 Oktober 2025</p>
                                    <a href="informasi/detail_berita/1" class="btn btn-second btn-sm mt-2">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="card h-100 shadow-sm rd-10 border-0 p-3">
                                <img src="assets/img/berita/berita2.jpg" class="card-img-top rd-10" alt="Pelantikan OSIS">
                                <div class="card-body p-3">
                                    <span class="badge bg-second bg-opacity-10 text-success mb-2">Kegiatan</span>
                                    <h5 class="card-title fw-bold">Pelantikan Pengurus OSIS Periode 2025/2026 Berlangsung Meriah</h5>
                                    <p class="card-text text-muted small">22 Oktober 2025</p>
                                    <a href="informasi/detail_berita/2" class="btn btn-second btn-sm mt-2">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                            <div class="card h-100 shadow-sm rd-10 border-0 p-3">
                                <img src="assets/img/berita/berita3.jpg" class="card-img-top rd-10" alt="Jadwal Ujian">
                                <div class="card-body p-3">
                                    <span class="badge bg-danger bg-opacity-10 text-danger mb-2">Pengumuman</span>
                                    <h5 class="card-title fw-bold">Jadwal Ujian Tengah Semester (UTS) Ganjil Tahun Ajaran 2025/2026</h5>
                                    <p class="card-text text-muted small">18 Oktober 2025</p>
                                    <a href="informasi/detail_berita/3" class="btn btn-second btn-sm mt-2">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                            <div class="card h-100 shadow-sm rd-10 border-0 p-3">
                                <img src="assets/img/berita/berita4.jpg" class="card-img-top rd-10" alt="Kunjungan Industri">
                                <div class="card-body p-3">
                                    <span class="badge bg-second bg-opacity-10 text-success mb-2">Kegiatan</span>
                                    <h5 class="card-title fw-bold">Kunjungan Industri Jurusan Perhotelan ke Sari Ater Hotel & Resort</h5>
                                    <p class="card-text text-muted small">15 Oktober 2025</p>
                                    <a href="informasi/detail_berita/4" class="btn btn-second btn-sm mt-2">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
                        <a href="#" class="btn btn-main btn-lg">Tampilkan Berita Lama</a>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
                    <p class="text-center text-muted py-5" data-aos="fade-up">Daftar berita khusus Prestasi akan ditampilkan di sini.</p>
                </div>

                <div class="tab-pane fade" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
                    <p class="text-center text-muted py-5" data-aos="fade-up">Daftar berita khusus Kegiatan akan ditampilkan di sini.</p>
                </div>

                <div class="tab-pane fade" id="pengumuman" role="tabpanel" aria-labelledby="pengumuman-tab">
                    <p class="text-center text-muted py-5" data-aos="fade-up">Daftar berita khusus Pengumuman akan ditampilkan di sini.</p>
                </div>

            </div>
        </div>
    </section>
    ---

    <section class="py-5 bg-main text-center" data-aos="fade-up">
        <div class="container py-4">
            <div class="col-lg-9 mx-auto">
                <h2 class="txt-judul text-white" data-aos="fade-up" data-aos-delay="100">Cari Bacaan Inspiratif?</h2>
                <p class="lead mb-4 text-white" data-aos="fade-up" data-aos-delay="200">Kunjungi halaman artikel kami untuk tips karir, teknologi, dan pendidikan.</p>
                <a href="informasi/artikel" class="btn btn-lig btn-lg px-5 py-3" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bi bi-book-fill me-2"></i> Kunjungi Halaman Artikel
                </a>
            </div>
        </div>
    </section>
    </main>
