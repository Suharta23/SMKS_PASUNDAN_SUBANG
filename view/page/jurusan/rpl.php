
<main>

  <?php

        $upper=1;//jika ingin text huruf besar semua

        $judul_hero1="Rekayasa ";
        $judul_hero2="Perangkat Lunak";

        $subjudul_hero="Mencetak talenta digital ahli dalam pengembangan aplikasi dan sistem.";

    ?>

    <?php include "view/layout/hero.php"; ?>

    <section id="prospek" class="py-5">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Jalur <span class="teg">Karir</span> Lulusan RPL</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Lulusan kami siap mengisi berbagai posisi strategis di era digital 4.0.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 shadow-sm bg-light rd-10 h-100">
                        <i class="bi bi-code-square fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Programmer / Developer</h4>
                        <p class="text-muted">Membangun, menguji, dan memelihara aplikasi berbasis web dan mobile.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 shadow-sm bg-light rd-10 h-100">
                        <i class="bi bi-gear-fill fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">System Analyst Junior</h4>
                        <p class="text-muted">Menganalisis kebutuhan pengguna dan merancang spesifikasi teknis sistem.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4 shadow-sm bg-light rd-10 h-100">
                        <i class="bi bi-database-fill fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Database Administrator</h4>
                        <p class="text-muted">Mengelola, memelihara, dan mengamankan basis data perusahaan.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    ---

    <section id="kompetensi" class="py-5 bg-light">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <h2 class="txt-judul fw-bold mb-4">Keahlian <span class="teg">Inti</span> yang Diajarkan</h2>
                    <p class="lead text-muted txt-justify">Kami fokus pada penguasaan bahasa pemrograman yang relevan dengan kebutuhan industri saat ini, seperti:</p>
                    
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3 d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-pc-display-horizontal txt-main me-3 fs-4"></i>
                            <span class="txt-dark">**Web Development:** Menguasai HTML5, CSS3 (Bootstrap/Tailwind), JavaScript, dan Framework (React/Vue).</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-phone-fill txt-main me-3 fs-4"></i>
                            <span class="txt-dark">**Mobile Programming:** Dasar-dasar pengembangan aplikasi Android menggunakan bahasa Kotlin/Java atau Framework Hybrid.</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-terminal-fill txt-main me-3 fs-4"></i>
                            <span class="txt-dark">**Database Management:** Perancangan dan implementasi basis data (MySQL, PostgreSQL).</span>
                        </li>
                    </ul>
                    
                    <a href="#" class="btn btn-second btn-lg mt-4">Lihat Silabus Lengkap</a>
                </div>
                <div class="col-lg-6 order-lg-1 d-flex justify-content-center" data-aos="fade-right">
                    
                    <img src="assets/img/jurusan/rpl_kompetensi.png" class="img-fluid rd-20 shadow-lg" alt="Siswa Coding RPL">
                </div>
            </div>
        </div>
    </section>
    ---

    <section id="fasilitas" class="py-5">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Fasilitas <span class="teg">Lab RPL</span> Berstandar Industri</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Pembelajaran didukung oleh peralatan dan lingkungan yang sesuai dengan kebutuhan industri TIK.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 shadow-sm bg-white rd-10 h-100 border border-main">
                        <i class="bi bi-display fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Lab Komputer High-Spec</h4>
                        <p class="text-muted">Komputer dengan spesifikasi tinggi untuk menjalankan IDE dan software *rendering* tanpa hambatan.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 shadow-sm bg-white rd-10 h-100 border border-main">
                        <i class="bi bi-server fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Server Lokal & Cloud Access</h4>
                        <p class="text-muted">Akses ke server lokal untuk simulasi *deployment* dan integrasi layanan *cloud* dasar.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4 shadow-sm bg-white rd-10 h-100 border border-main">
                        <i class="bi bi-wifi fs-1 txt-main mb-3"></i>
                        <h4 class="fw-bold">Jaringan Cepat & Stabil</h4>
                        <p class="text-muted">Koneksi internet berkecepatan tinggi yang mendukung proyek pengembangan *real-time*.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    ---

    <section class="py-5 bg-main text-center" data-aos="fade-up">
        <div class="container py-4">
            <div class="col-lg-9 mx-auto">
                <h2 class="txt-judul text-white" data-aos="fade-up" data-aos-delay="100">Siap Menjadi Programmer Andal?</h2>
                <p class="lead mb-4 text-white" data-aos="fade-up" data-aos-delay="200">Bergabunglah dengan Jurusan RPL dan mulai karir Anda di dunia teknologi.</p>
                <a href="kontak" class="btn btn-lig btn-lg px-5 py-3" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bi bi-box-arrow-in-right me-2"></i> Konsultasi Jurusan Sekarang
                </a>
            </div>
        </div>
    </section>
    </main>
