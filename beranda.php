<?php include "layout/head.php" ?>
<body style="position: relative;" data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="100">
    <?php include "layout/navbar.php" ?>
    <main>
        <!-- SECTION HERO: Tampilan awal dengan tagline, teks utama, dan gambar ilustrasi -->
        <section class="bg-img-hero bg-body-tertiary" data-aos="fade-up">
            <div class="hero">
                <div class="container-fluid hero-fl">
                    <div class="container">
                        <div class="row px-4">
                            <!-- Konten Kiri: Judul, subjudul, deskripsi dan tombol action -->
                            <div class="kiri col-lg-5 d-flex align-items-start justify-content-center h-md-50 flex-column pt-5">
                                <h1 class="hero-title text-start txt-dark" data-aos="fade-up" data-aos-delay="100">Pendidikan Vokasi Unggul,</h1>
                                <h1 class="pasundan hero-title text-start txt-main" data-aos="fade-up" data-aos-delay="150">
                                    <span class="teg">Siap Kerja</span> & Berkarakter
                                </h1>
                                <p class="mt-4 col-lg-10 text-start" data-aos="fade-up" data-aos-delay="250">
                                    Membentuk generasi profesional yang kompeten di bidangnya, berlandaskan iman dan taqwa, serta siap bersaing di dunia industri.
                                </p>
                                <div class="tmbol mt-4" data-aos="fade-up" data-aos-delay="300">
                                    <!-- Tombol Kegiatan Siswa: Membuka halaman kegiatan siswa -->
                                    <a href="kegiatan_siswa.php" class="btn btn-main mx-2 mt-3 ms-0">Kegiatan Siswa</a>
                                    <!-- Tombol Info Pendaftaran: Mengarahkan ke informasi pendaftaran siswa baru -->
                                    <button class="btn btn-second mx-2 mt-3 ms-0 btn-sc-hero">Info Pendaftaran</button>
                                </div>
                            </div>
                            <!-- Konten Kanan: Gambar ilustrasi dan highlight karakter dan kesiapan kerja -->
                            <div class="kanan col-lg-7 d-flex align-items-center justify-content-center flex-column hp-hidden">
                                <div class="gambar-container col-12">
                                    <img src="assets/img/hero/3.png" class="img-fluid gambar-patok pt-5" data-aos="fade-up" data-aos-delay="100" />
                                    <!-- Highlight karakter: Berakhlak dan percaya diri -->
                                    <div class="posisi1 bg-glases" data-aos="fade-up" data-aos-delay="200">
                                        <div class="col-12 bg-light p-3 rounded">
                                            <p class="fw-semibold mb-1">
                                                <span class="teg">Berkarakter</span>
                                            </p>
                                            <small class="text-muted">Berakhlak dan percaya diri</small>
                                        </div>
                                    </div>
                                    <!-- Highlight kesiapan kerja: Kompeten di bidangnya -->
                                    <div class="posisi2 bg-glases" data-aos="fade-up" data-aos-delay="200">
                                        <div class="col-12 bg-light p-3 rounded">
                                            <p class="fw-semibold mb-1">
                                                <span class="teg">Siap Kerja</span>
                                            </p>
                                            <small class="text-muted">Berkompeten di bidangnya</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION HERO -->

         <!-- SAMBUTAN KEPALA SEKOLAH  -->
       <section id="sambutan" class="py-5 bg-white">
            <div class="container py-4">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="card shadow-lg border-0 rd-20 overflow-hidden">
                            <div style="width: 100%; padding-top: 100%; position: relative;">
                                <img src="assets/img/pegawai/pa nano.png" 
                                    class="img-fluid" 
                                    alt="Foto Kepala Sekolah Nano Supriatna, M.Kom" 
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 0.5rem 0.5rem 0 0;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-left">
                        <h6 class="ttg-judul">Sambutan Kepala Sekolah</h6>
                        <h2 class="txt-judul mb-4">Pesan <span class="teg">Inspiratif</span> dari Pimpinan</h2>
                        
                        <p class="lead text-muted txt-justify">
                            <strong>Assalamu'alaikum Warahmatullahi Wabarakatuh.</strong><br> Selamat datang di website resmi SMKS Pasundan Subang. Kami bertekad menjadi pusat pendidikan vokasi unggulan yang fokus pada <strong>kesiapan kerja dan penguatan karakter.</strong>
                        </p>
                        <p class="txt-justify mb-4">
                            SMKS Pasundan Subang berkomitmen untuk menghasilkan lulusan yang kompeten di bidangnya (Link & Match) dan berakhlak mulia. Tugas kami adalah menemukan, mengasah, dan membantu setiap siswa <strong>menerbangkan potensi luar biasa</strong> mereka.
                        </p>
                        
                        <div class="mt-4">
                            <h4 class="fw-bold txt-main mb-1">Nano Supriatna, M.Kom.</h4>
                            <p class="text-muted fst-italic">Kepala SMKS Pasundan Subang</p>
                        </div>
                        
                        <a href="sambutan_kepsek.php" class="btn btn-main btn-lg px-5 py-3 mt-2">Baca Sambutan Selengkapnya <i class="bi bi-arrow-right-short text-white"></i></a>
                    </div>
                </div>
            </div>
        </section>

         <!-- SAMBUTAN KEPALA SEKOLAH END  -->

        <!-- SECTION PROGRAM: Menampilkan program pembiasaan karakter siswa yang diterapkan -->
        <section id="program" class="py-5">
            <div class="container py-4">
                <div class="text-center col-lg-8 mx-auto mb-5">
                    <h2 class="display-5 fw-bold txt-judul" data-aos="fade-up">
                        Program <span class="teg">Pembiasaan</span> Karakter
                    </h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                        Kami percaya pendidikan bukan hanya soal akademik, tapi juga pembentukan karakter. Inilah program unik yang kami terapkan sehari-hari.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <!-- Program Ngaji Bareng -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card shadow-sm h-100 p-4 text-center program-card rd-20 txt-dark">
                            <i class="bi bi-book-fill fs-1 txt-main mb-3"></i>
                            <h4 class="fw-bold">Program <span class="teg">Ngaji Bareng</span></h4>
                            <p class="text-muted txt-justify">
                                Memulai hari dengan ketenangan batin dan siraman rohani untuk memperkuat spiritualitas siswa sebelum belajar.
                            </p>
                            <!-- Link detail program -->
                            <a href="program_ngaji_bareng.php" class="btn btn-second btn-sm mt-2">Lihat Detail</a>
                        </div>
                    </div>
                    <!-- Program Makan Bergizi Gratis -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card shadow-sm h-100 p-4 text-center program-card rd-20 txt-dark">
                            <i class="bi bi-egg-fried fs-1 txt-main mb-3"></i>
                            <h4 class="fw-bold"><span class="teg">Makan Bergizi</span> Gratis</h4>
                            <p class="text-muted txt-justify">
                                Memastikan setiap siswa mendapatkan asupan gizi yang cukup untuk fokus dan sehat selama proses belajar mengajar.
                            </p>
                            <a href="program_makan_bergizi_gratis.php" class="btn btn-second btn-sm mt-2">Lihat Detail</a>
                        </div>
                    </div>
                    <!-- Program K-7 -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card shadow-sm h-100 p-4 text-center program-card rd-20 txt-dark">
                            <i class="bi bi-tree-fill fs-1 txt-main mb-3"></i>
                            <h4 class="fw-bold">Program <span class="teg">K-7</span></h4>
                            <p class="text-muted txt-justify">
                                Menanamkan rasa tanggung jawab terhadap lingkungan melalui program Kebersihan, Keindahan, Ketertiban, dan lainnya.
                            </p>
                            <a href="program_k7.php" class="btn btn-second btn-sm mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION PROGRAM -->

        <!-- SECTION PROFIL: Sejarah singkat sekolah dan identitas -->
        <section id="profil" class="py-5 bg-light">
            <div class="container py-4">
                <div class="row g-5 align-items-center">
                    <!-- Gambar gedung lama dan baru sebagai visualisasi perkembangan -->
                    <div class="col-lg-6 p-5 d-flex align-items-center justify-content-center position-relative dua-gambar" data-aos="fade-right">
                        <img src="assets/img/konten/gedung-lama.png" class="img-fluid img-dua rd-20 img-lama" alt="Gedung Sekolah Lama" />
                        <img src="assets/img/konten/gedung-baru.png" class="img-fluid img-dua rd-20 img-baru" alt="Gedung Sekolah Baru" />
                    </div>
                    <!-- Deskripsi sejarah, fasilitas, dan keunggulan sekolah -->
                    <div class="col-lg-6 ps-5" data-aos="fade-left">
                        <h6 class="ttg-judul">Tentang Kami</h6>
                        <h2 class="txt-judul"><span class="teg">Sejarah Singkat</span> & Identitas</h2>
                        <p class="lead text-muted txt-justify">
                            Didirikan pada 2000, SMKS Pasundan Subang telah mendedikasikan diri untuk menjadi pusat pendidikan vokasi terdepan di Kabupaten Subang.
                        </p>
                        <p class="txt-justify">
                            Kami berlokasi strategis di Subang Kota, menyediakan lingkungan belajar yang aman, modern, dan didukung oleh fasilitas lengkap untuk menunjang 6 kompetensi keahlian unggulan kami.
                        </p>
                        <ul class="list-unstyled mt-3 fs-5">
                            <li class="mb-2"><i class="bi bi-check-circle-fill txt-main me-2"></i> Akreditasi A (Unggul)</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill txt-main me-2"></i> Tenaga Pengajar Profesional</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill txt-main me-2"></i> Fasilitas Workshop Standar Industri</li>
                        </ul>
                        <a href="sejarah.php" class="btn btn-main btn-lg px-5 py-3 mt-2">Pelajari Sejarah Kami</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION PROFIL -->


        <!-- SECTION JURUSAN: Menampilkan kompetensi keahlian dan jurusan pilihan -->
        <section id="jurusan" class="py-5">
            <div class="container py-4">
                <div class="text-center col-lg-8 mx-auto mb-5">
                    <h6 class="ttg-judul" data-aos="fade-up">Kompetensi Keahlian</h6>
                    <h2 class="txt-judul" data-aos="fade-up" data-aos-delay="100">
                        Jurusan Pilihan <span class="teg">Siap Industri</span>
                    </h2>
                </div>
                <div class="row g-4">
                    <!-- Jurusan Rekayasa Perangkat Lunak -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/rpl.png" class="img-fluid rd-10" alt="RPL" />
                            <div class="card-body p-4">
                                <h5 class="fw-bold">Rekayasa Perangkat Lunak</h5>
                                <p class="text-muted small">Menjadi programmer, web developer, dan analis sistem.</p>
                                <a href="jurusan_rpl.php" class="btn btn-main">Lihat Detail <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Jurusan Teknik Komputer & Jaringan -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/tkj.png" class="img-fluid rd-10" alt="TKJ" />
                            <div class="card-body p-4">
                                <h5 class="fw-bold">Teknik Komputer & Jaringan</h5>
                                <p class="text-muted small">Ahli infrastruktur jaringan, administrator server, dan keamanan siber.</p>
                                <a href="jurusan_tkj.php" class="btn btn-main">Lihat Detail <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Jurusan Teknik Kendaraan Ringan -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/tkr.png" class="img-fluid rd-10" alt="TKR" />
                            <div class="card-body p-4">
                                <h5 class="fw-bold">Teknik Kendaraan Ringan</h5>
                                <p class="text-muted small">Spesialis mekanik, servis berkala, dan teknologi otomotif modern.</p>
                                <a href="jurusan_tkr.php" class="btn btn-main">Lihat Detail <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Jurusan Akuntansi -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/ak.png" class="img-fluid rd-10" alt="Akuntansi" />
                            <div class="card-body p-4">
                                <h5 class="fw-bold">Akuntansi</h5>
                                <p class="text-muted small">Tenaga profesional keuangan, perpajakan, dan audit junior.</p>
                                <a href="jurusan_akuntansi.php" class="btn btn-main">Lihat Detail <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Jurusan Administrasi Perkantoran -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/mp.png" class="img-fluid rd-10" alt="Perkantoran" />
                            <div class="card-body p-4">
                                <h5 class="fw-bold">Administrasi Perkantoran</h5>
                                <p class="text-muted small">
                                    Mempersiapkan tenaga terampil dalam pengelolaan surat, arsip, dan pelayanan administrasi perkantoran.
                                </p>
                                <a href="jurusan_perkantoran.php" class="btn btn-main">Lihat Detail <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Jurusan Perhotelan -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/htl.png" class="img-fluid rd-10" alt="Perhotelan" />
                            <div class="card-body p-4">
                                <h5 class="fw-bold">Perhotelan</h5>
                                <p class="text-muted small">Menguasai front office, housekeeping, dan layanan hospitality.</p>
                                <a href="jurusan_perhotelan.php" class="btn btn-main">Lihat Detail <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION JURUSAN -->

        <!-- SECTION MITRA INDUSTRI: Menampilkan logo mitra industri sebagai dukungan link & match -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="text-center col-lg-8 mx-auto mb-5">
                    <h6 class="ttg-judul" data-aos="fade-up">Link & Match</h6>
                    <h2 class="txt-judul" data-aos="fade-up" data-aos-delay="100">
                        <span class="teg">Didukung Penuh</span> Mitra Industri
                    </h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="200">
                        Lulusan kami siap terserap berkat kerjasama dan sinkronisasi kurikulum dengan puluhan mitra terkemuka.
                    </p>
                </div>
                <div class="logo-carousel" data-aos="fade-up" data-aos-delay="300">
                    <div class="partner-logo">
                        <!-- Logo mitra industri -->
                        <img src="assets/img/logo/mitra/gothru.png" class="lgo-mitra" alt="Mitra Gothru" />
                        <img src="assets/img/logo/mitra/aspapi-jawa-barat.png" class="lgo-mitra" alt="Mitra Aspapi" />
                        <img src="assets/img/logo/mitra/BANTEX.png" class="lgo-mitra" alt="Mitra Bantex" />
                        <img src="assets/img/logo/mitra/BPR.png" class="lgo-mitra" alt="Logo Mitra BPR" />
                        <img src="assets/img/logo/mitra/BSI.png" class="lgo-mitra" alt="Logo Mitra BSI" />
                        <img src="assets/img/logo/mitra/GPI.png" class="lgo-mitra" alt="Logo Mitra GPI" />
                        <img src="assets/img/logo/mitra/IHKA.png" class="lgo-mitra" alt="Logo Mitra IHKA" />
                        <img src="assets/img/logo/mitra/LPK-CIS.png" class="lgo-mitra" alt="Logo Mitra LPK CIS" />
                        <img src="assets/img/logo/mitra/LPPBK.png" class="lgo-mitra" alt="Logo Mitra LPPBK" />
                        <img src="assets/img/logo/mitra/MITSUBISHI.png" class="lgo-mitra" alt="Logo Mitra Mitsubishi" />
                        <img src="assets/img/logo/mitra/PNM.png" class="lgo-mitra" alt="Logo Mitra PNM" />
                        <img src="assets/img/logo/mitra/SARI ATER.png" class="lgo-mitra" alt="Logo Mitra Sari Ater" />
                        <img src="assets/img/logo/mitra/WINTER.png" class="lgo-mitra" alt="Logo Mitra Winter" />
                        <img src="assets/img/logo/mitra/ASTON.png" class="lgo-mitra" alt="Logo Mitra Aston" />
                        <!-- Duplikat logo, sebaiknya hapus jika perlu untuk kinerja optimal -->
                    </div>
                </div>
                <div class="text-center mt-5">
                    <!-- Tombol lihat semua mitra industri -->
                    <a href="mitra_industri.php" class="btn btn-main btn-lg px-5 py-3" data-aos="zoom-in" data-aos-delay="400">
                        <i class="bi bi-briefcase-fill me-2 text-white"></i> Lihat Semua Mitra Kami
                    </a>
                </div>
            </div>
        </section>
        <!-- END SECTION MITRA INDUSTRI -->

        <!-- SECTION KONTAK: Bimbingan konseling membantu siswa memilih jurusan -->
        <section class="py-5 bg-main text-center" data-aos="fade-up">
            <div class="container py-4">
                <div class="col-lg-9 mx-auto">
                    <h2 class="txt-judul text-white" data-aos="fade-up" data-aos-delay="100">Masih Bingung Memilih Jurusan?</h2>
                    <p class="lead mb-4 text-white" data-aos="fade-up" data-aos-delay="300">
                        Tim Bimbingan Konseling kami siap membantu mengarahkan minat dan bakat Anda. Jangan ragu untuk berkonsultasi.
                    </p>
                    <!-- Tombol hubungi kami -->
                    <a href="kontak_kami.php" class="btn btn-lig btn-lg px-5 py-3" data-aos="zoom-in" data-aos-delay="300">
                        <i class="bi bi-telephone-fill me-2"></i> Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </section>
        <!-- END SECTION KONTAK -->

        <!-- SECTION INFORMASI: Berita dan kegiatan terbaru dari sekolah -->
        <section id="informasi" class="py-5">
            <div class="container py-4">
                <div class="text-center col-lg-8 mx-auto mb-5">
                    <h6 class="ttg-judul" data-aos="fade-up">Informasi</h6>
                    <h2 class="txt-judul" data-aos="fade-up" data-aos-delay="100">
                        Berita & <span class="teg">Kegiatan Terbaru</span>
                    </h2>
                </div>
                <div class="row g-4">
                    <!-- Berita Donor Darah PMR -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/htl.png" class="img-fluid rd-10" alt="Berita PMR Donor Darah" />
                            <div class="card-body p-4">
                                <span class="badge bg-danger bg-opacity-10 text-danger mb-2">PMR</span>
                                <h5 class="card-title fw-bold">PMR [Nama Sekolah] Gelar Aksi Donor Darah</h5>
                                <p class="card-text text-muted small">24 Oktober 2025</p>
                                <a href="detail_berita.php" class="btn btn-main">Baca Selengkapnya <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Berita Pelantikan OSIS -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/htl.png" class="img-fluid rd-10" alt="Berita Pelantikan OSIS" />
                            <div class="card-body p-4">
                                <span class="badge bg-primary bg-opacity-10 text-primary mb-2">OSIS</span>
                                <h5 class="card-title fw-bold">Pelantikan Pengurus OSIS Baru Periode 2025/2026</h5>
                                <p class="card-text text-muted small">22 Oktober 2025</p>
                                <a href="berita.php" class="btn btn-main">Baca Selengkapnya <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Artikel Soft Skills -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="assets/img/jurusan/htl.png" class="img-fluid rd-10" alt="Artikel Soft Skills" />
                            <div class="card-body p-4">
                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Artikel</span>
                                <h5 class="card-title fw-bold">Pentingnya 'Soft Skills' di Dunia Kerja Vokasi</h5>
                                <p class="card-text text-muted small">20 Oktober 2025</p>
                                <a href="artikel.php" class="btn btn-main">Baca Selengkapnya <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION INFORMASI -->
    </main>

    <!-- FOOTER: Berisi tambahan informasi footer dari file terpisah -->
    <?php include "layout/footer.php" ?>

    <!-- FOOTER FOOT: Berisi script dan penutup halaman -->
    <?php include "layout/foot.php" ?>

    <!-- COPYRIGHT INFO: Tambahan copyright di footer -->
    <!-- <footer class="text-center py-3 bg-dark text-white">
        <small>&copy; 2025 Suharta. All Rights Reserved.</small>
    </footer> -->

    <!-- 
    Penjelasan Web dan Cara Penggunaan:
    - Website ini merupakan situs resmi SMKS Pasundan Subang sebagai pusat informasi pendidikan vokasi.
    - Pengguna dapat menavigasi menu untuk melihat informasi sekolah, program, jurusan, mitra industri, berita, dan kontak.
    - Tombol pada setiap section mengarahkan ke halaman detail untuk informasi lebih lengkap.
    - Pastikan untuk mengeksplorasi bagian Link & Match untuk peluang kerja sama industri.
    - Jika membutuhkan bantuan memilih jurusan, dapat menghubungi tim Bimbingan Konseling melalui tombol "Hubungi Kami Sekarang".
    - Website ini responsif, dapat diakses di perangkat desktop maupun mobile.
    -->
</body>
</html>
