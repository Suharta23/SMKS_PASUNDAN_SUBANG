<?php

    $judul_hero1="Galeri ";
    $judul_hero2="Momen Kami";

    $subjudul_hero="Kumpulan foto dan video yang merekam perjalanan SMKS Pasundan Subang.";


    $pengantar = [
        'id' => 'pengantar',
        'bg' => 'py-5', // bisa ditambah bg-light / bg-white jika mau
        'title' => 'Ribuan Kisah, <span class="teg">Satu Sekolah</span>',
        'lead' => 'Setiap foto dan video di sini menceritakan dedikasi kami dalam menyediakan pendidikan berkualitas dan lingkungan belajar yang aktif.',
        'desc' => 'Jelajahi berbagai kegiatan akademik, non-akademik, hingga momen kebersamaan siswa dan guru. Klik pada kategori di bawah untuk menjelajahinya.',
        'image' => [
            'src' => 'assets/img/konten/Photos.png',
            'alt' => 'Ilustrasi album foto'
        ],
        'buttons' => [
            [
                'text' => 'Lihat Foto Terbaru',
                'target' => 'galeri-foto'
            ],
            [
                'text' => 'Tonton Video Kami',
                'target' => 'galeri-video'
            ]
        ]
    ];


    $galeri_foto = [
        'id' => 'galeri-foto',
        'bg' => 'py-5 bg-light',
        'title' => '<span class="teg">Galeri Foto</span> Kegiatan',
        'desc' => 'Momen-momen berharga dari kegiatan sekolah, workshop, dan acara khusus.',
        'categories' => [
            ['label' => 'Semua', 'active' => true],
            ['label' => 'Akademik', 'active' => false],
            ['label' => 'Ekstrakurikuler', 'active' => false],
            ['label' => 'Sarana Prasarana', 'active' => false],
        ],
        'items' => [
            [
                'src' => 'assets/img/galeri/foto1.jpg',
                'title' => 'Workshop Jurusan RPL',
                'alt' => 'Workshop RPL',
                'delay' => 200
            ],
            [
                'src' => 'assets/img/galeri/foto2.jpg',
                'title' => 'Lomba K-7 Kebersihan Kelas',
                'alt' => 'Lomba K-7',
                'delay' => 300
            ],
            [
                'src' => 'assets/img/galeri/foto3.jpg',
                'title' => 'Sesi Praktikum TKR',
                'alt' => 'Praktikum TKR',
                'delay' => 400
            ],
            [
                'src' => 'assets/img/galeri/foto4.jpg',
                'title' => 'Pentas Seni HUT Sekolah',
                'alt' => 'Pentas Seni',
                'delay' => 500
            ],
            [
                'src' => 'assets/img/galeri/foto5.jpg',
                'title' => 'Kunjungan Industri Jurusan Akuntansi',
                'alt' => 'Kunjungan Industri',
                'delay' => 600
            ],
            [
                'src' => 'assets/img/galeri/foto6.jpg',
                'title' => 'Gedung Sekolah Tampak Depan',
                'alt' => 'Gedung Sekolah',
                'delay' => 700
            ],
        ],
        'button' => [
            'text' => 'Tampilkan Lebih Banyak Foto',
            'link' => '#'
        ]
    ];



$galeri_video = [
    'id' => 'galeri-video',
    'bg' => 'py-5',
    'title' => '<span class="teg">Video</span> Profil & Kegiatan',
    'desc' => 'Lihat profil sekolah dan dokumentasi acara resmi dalam bentuk video.',
    'items' => [
        [
            'judul' => 'Hari Guru (2021)',
            'src' => 'https://www.youtube.com/embed/AjcimVhjnF8?si=GD1MbAJ1tZjdrhkS&amp;controls=0',
            'delay' => 200,
            'anim' => 'fade-right'
        ],
        [
            'judul' => 'Dokumentasi Acara Wisuda Angkatan XX',
            'src' => 'https://www.youtube.com/embed/GJmJ6z3o578?si=LO15u76cUkvhua8Y&amp;controls=0',
            'delay' => 300,
            'anim' => 'fade-left'
        ],
    ],
    'button' => [
        'text' => 'Kunjungi Channel YouTube Kami',
        'link' => 'https://www.youtube.com/@smkpassbg',
        'target' => '_blank',
        'class' => 'btn btn-second btn-lg'
    ]
];


// cta
 komponen("cta");

    $judul="Lihat Kegiatan Siswa Lebih Detail";
    $deskripsi="Galeri hanyalah permulaan. Jelajahi juga berita, program, dan jurusan kami.";
    $link="informasi/berita";
    $btn_cta="Lihat Berita";
    $ikon="bi-newspaper";
