 <?php

        $judul_hero1="Peserta ";
        $judul_hero2="Didik";

        $subjudul_hero="Generasi penerus yang aktif, kreatif, dan berkarakter di SMKS Pasundan Subang.";

// baigan pengantar
        $pengantar_j1="Kami Mencetak ";
        $pengantar_j2="Generasi Profesional";

        $pengantar_lead="Di SMKS Pasundan Subang, setiap siswa dipandang sebagai aset berharga yang tengah dipersiapkan menjadi tenaga profesional unggulan. Kami fokus pada keseimbangan antara kompetensi keahlian dan penguatan karakter.";
        $pengantar_txt="Lingkungan belajar kami dirancang untuk memicu kreativitas, kemandirian, dan semangat kolaborasi, memastikan mereka siap bersaing di dunia kerja lokal maupun global.";
// Pengantar end

// angka

    $judul="Siswa Kami dalam Angka";

    $stats = [
        [
            'icon' => 'bi-person-gear',
            'number' => '12+',
            'text' => 'Fasilitas Lab Praktik'
        ],
        [
            'icon' => 'bi-person-workspace',
            'number' => '6',
            'text' => 'Kompetensi Keahlian'
        ],
        [
            'icon' => 'bi-award-fill',
            'number' => '15+',
            'text' => 'Ekstrakurikuler'
        ],
    ];
// angka end


// organisasi siswa

    $l_gbr = [
        'id' => 'osis',
        'bg' => 'bg-white',
        'image' => 'assets/img/konten/osis-placeholder.jpg',

        'alt' => 'Kegiatan OSIS SMKS Pasundan Subang',
        'subtitle' => 'OSIS & Organisasi',
        'title' => 'Motor Penggerak <span class="teg">Kegiatan Siswa</span>',
        'lead' => 'Organisasi Siswa Intra Sekolah (OSIS) adalah jantung dari kehidupan siswa di SMKS Pasundan Subang.',
        'desc' => 'Melalui OSIS, siswa belajar menjadi pemimpin, mengelola acara, dan menyuarakan aspirasi mereka. Kami mendukung penuh semua program kerja OSIS yang positif untuk melatih tanggung jawab, kerja sama tim, dan keterampilan manajerial siswa.',
        'kegiatan' => [
            'Latihan Dasar Kepemimpinan (LDK)',
            'Peringatan Hari Besar Nasional',
            'Class Meeting & Pensi'
        ]
    ];
// organisasi end

// card layout
    komponen("card_layout");

    $judul_eskul="Wadah Minat & Bakat";
    $subjudul='Pendidikan bukan hanya soal akademik. Kami menyediakan beragam ekstrakurikuler untuk mengembangkan potensi siswa secara menyeluruh.';
    $bg='bg-light';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-bicycle',
            'warna' => 'bg-main',
            'judul' => 'Olahraga & Kesehatan',
            'teks' => 'Mulai dari Futsal, Bola Voli, Basket, hingga Palang Merah Remaja (PMR) untuk fisik yang kuat dan jiwa yang sehat.'
        ],
        [
            'icon' => 'bi-palette-fill',
            'warna' => 'bg-main',
            'judul' => 'Seni & Kreativitas',
            'teks' => 'Ekspresikan diri melalui ekstrakurikuler Musik, Paduan Suara, Tari Tradisional, dan Desain Grafis.'
        ],
        [
            'icon' => 'bi-book-half',
            'warna' => 'bg-main',
            'judul' => 'Akademik & Keagamaan',
            'teks' => 'Perdalam ilmu di English Club, IT Club (RPL/TKJ), dan perkuat iman melalui Rohani Islam (Rohis).'
        ]
    ];

// card layout end

    // cta
 komponen("cta");

    $judul="Lihat Aksi Mereka";
    $deskripsi="Kunjungi galeri dan halaman berita untuk melihat berbagai prestasi dan kegiatan seru siswa SMKS Pasundan Subang.";
    $link="profil/galeri";
    $btn="Kunjungi Galeri";
    $ikon="bi-image-fill";