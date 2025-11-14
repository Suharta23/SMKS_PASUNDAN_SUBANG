<?php

    $judul_hero1="Bursa Kerja";
    $judul_hero2="Khusus (BKK)";

    $subjudul_hero="Jembatan resmi penempatan lulusan SMKS Pasundan Subang ke dunia industri.";

    komponen("layout1");

    $id= 'definisi';
    $judul= 'Pusat Informasi & ';
    $highlight= 'Penyaluran Karir';
    $teks_awal= '<strong>Bursa Kerja Khusus (BKK)</strong> adalah unit vital yang didirikan di sekolah kejuruan (SMK) untuk menjadi unit pelayanan dan **penyaluran tenaga kerja** bagi alumni, di bawah koordinasi Dinas Tenaga Kerja.';
    $kutipan= 'Peran utama BKK adalah menjamin bahwa setiap lulusan memiliki akses mudah dan cepat ke ratusan peluang kerja dari perusahaan mitra Link & Match kami.';
    $judul_list="";

    $dasar= [];

    $gambar= 'assets/img/hubinmas/bkk_definisi.png';
    $alt= 'Ilustrasi Bursa Kerja Khusus';

    // card layout
    komponen("card_layout");

    $judul_nilai="Tiga Layanan Inti BKK";
    $subjudul='BKK memberikan dukungan komprehensif mulai dari kesiapan diri hingga penempatan kerja.';
    $bg='bg-light';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-person-workspace',
            'warna' => 'bg-main',
            'judul' => 'Pelatihan Kesiapan Kerja (Soft Skills)',
            'teks' => 'Pembekalan dalam pembuatan CV, simulasi wawancara kerja, dan tes psikologi untuk menghadapi proses rekrutmen industri.'
        ],
        [
            'icon' => 'bi-arrow-up-right-square-fill',
            'warna' => 'bg-second',
            'judul' => 'Penyaluran dan Rekrutmen Khusus',
            'teks' => 'Mengadakan rekrutmen massal (Job Fair Mini) dan penyaluran lulusan langsung ke perusahaan mitra yang membutuhkan kompetensi spesifik.'
        ],
        [
            'icon' => 'bi-search',
            'warna' => 'bg-main',
            'judul' => 'Penelusuran Alumni (Tracer Study)',
            'teks' => 'Memantau status alumni (bekerja, wirausaha, atau kuliah) untuk memastikan efektivitas program vokasi dan mendapatkan umpan balik untuk perbaikan kurikulum.'
        ]
    ];

    // cta
    komponen("cta");

    $judul="Kekuatan Kami: Jaringan Mitra Industri";
    $deskripsi="BKK bekerja maksimal karena didukung oleh puluhan perusahaan yang siap merekrut lulusan kami.";
    $link="hubinmas/mitra_dudi";
    $btn="Lihat Daftar Mitra Industri";
    $ikon="bi-building-fill";

?>

