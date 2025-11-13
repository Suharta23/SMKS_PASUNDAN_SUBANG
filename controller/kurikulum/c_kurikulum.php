<?php

    $judul_hero1="Kurikulum ";
    $judul_hero2="Sekolah";
    $subjudul_hero="Pondasi pendidikan vokasi yang adaptif dan berkarakter.";


	komponen("card_layout");

    $judul="Pilar Filosofi Kurikulum Kami";
    $subjudul='Kami menerapkan Kurikulum Merdeka yang diperkaya dengan praktik industri dan pembentukan karakter.';
    $bg='bg-white';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-person-workspace',
            'warna' => 'bg-main',
            'judul' => 'Kompetensi Industri',
            'teks' => 'Kurikulum berbasis unit kompetensi DUDIKA dan sertifikasi keahlian profesional.'
        ],
        [
            'icon' => 'bi-clipboard-check',
            'warna' => 'bg-main',
            'judul' => 'Pembelajaran Berbasis Projek',
            'teks' => 'Mendorong kreativitas dan pemecahan masalah melalui *Project Based Learning* (PBL) nyata.'
        ],
        [
            'icon' => 'bi-patch-check',
            'warna' => 'bg-main',
            'judul' => 'Penguatan Profil Pelajar',
            'teks' => 'Fokus pada pembentukan karakter, etika, dan soft skill melalui program P5 (Pelajar Pancasila).'
        ]
    ];


    //struktur kurikulum

    $struktur_kurikulum = [
    [
        "komponen" => "Intrakurikuler",
        "fokus" => "Mata Pelajaran Wajib & Kejuruan",
        "alokasi" => "~70% Waktu Belajar"
    ],
    [
        "komponen" => "P5",
        "fokus" => "Soft Skill & Karakter (Profil Pelajar Pancasila)",
        "alokasi" => "~20% Waktu Belajar"
    ],
    [
        "komponen" => "Ekstrakurikuler",
        "fokus" => "Minat, Bakat, dan Komunitas Siswa",
        "alokasi" => "Diluar Jam Tatap Muka"
    ],
    [
        "komponen" => "Magang (PKL)",
        "fokus" => "Penerapan Kompetensi di DUDIKA",
        "alokasi" => "Pada Semester Tertentu"
    ]
];

$judul_struktur = [
    "judul" => "Rincian <span class='teg'>Struktur</span> Kurikulum",
    "deskripsi" => "Program pembelajaran dibagi berdasarkan alokasi waktu dan fokus pengembangan siswa:",
    "bg" => "bg-white", // bisa diubah: bg-white, bg-light, atau bg-body
    "gambar" => "assets/img/konten/struktur_kurikulum.png"
];


// bagian jurusan

 komponen("card_2");

$jurusan_list = [
    [
        "nama" => "RPL",
        "deskripsi" => "Pengembangan Web/Mobile & Database.",
        "icon" => "bi-code-slash",
        "link" => "/jurusan/rpl"
    ],
    [
        "nama" => "TKJ",
        "deskripsi" => "Jaringan, Keamanan Siber & Cloud.",
        "icon" => "bi-diagram-3-fill",
        "link" => "/jurusan/tkj"
    ],
    [
        "nama" => "TKR",
        "deskripsi" => "Perawatan Mesin Injeksi & Diagnosis.",
        "icon" => "bi-gear-fill",
        "link" => "/jurusan/tkr"
    ],
    [
        "nama" => "AKL",
        "deskripsi" => "Akuntansi Digital & Perpajakan.",
        "icon" => "bi-calculator-fill",
        "link" => "/jurusan/akuntansi"
    ],
    [
        "nama" => "OTKP",
        "deskripsi" => "Administrasi & Kearsipan Digital.",
        "icon" => "bi-briefcase-fill",
        "link" => "/jurusan/perkantoran"
    ],
    [
        "nama" => "Perhotelan",
        "deskripsi" => "Front Office, Housekeeping & F&B.",
        "icon" => "bi-house-door-fill",
        "link" => "/jurusan/perhotelan"
    ],
];

komponen("tbl1");

// cta
    komponen("cta");

    $judul="Siap Menjadi Lulusan Kompeten?";
    $deskripsi="Kurikulum kami memastikan Anda siap bekerja dan berkarakter unggul.";
    $link="/kontak";
    $btn="Hubungi Tim Akademik";
    $ikon="bi-envelope-fill";

