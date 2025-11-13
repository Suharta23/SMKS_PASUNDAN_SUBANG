<?php

    $judul_hero1="Pendidik ";
    $judul_hero2="& Staf";

    $subjudul_hero="Tim profesional yang berdedikasi untuk mencetak generasi unggul.";

    komponen("card_layout");

    $judul="Mengapa Tim Kami Berbeda?";
    $subjudul='Kami percaya pada keunggulan, inovasi, dan bimbingan personal. Inilah yang membuat setiap anggota tim kami istimewa.';
    $bg='bg-white';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-award-fill',
            'warna' => 'bg-main',
            'judul' => 'Pengalaman & Kompetensi',
            'teks' => 'Setiap guru dan staf memiliki latar belakang pendidikan yang kuat dan pengalaman praktis di bidangnya.'
        ],
        [
            'icon' => 'bi-lightbulb-fill',
            'warna' => 'bg-main',
            'judul' => 'Inovasi & Adaptasi',
            'teks' => 'Kami selalu mengikuti perkembangan teknologi dan kurikulum terbaru untuk relevansi industri.'
        ],
        [
            'icon' => 'bi-heart-fill',
            'warna' => 'bg-main',
            'judul' => 'Dedikasi & Bimbingan',
            'teks' => 'Pendekatan personal dalam membimbing setiap siswa untuk mencapai potensi terbaik mereka.'
        ]
    ];


    //fakta menarik

    $judul="Fakta Menarik Tentang Tim Kami";

    $stats = [
        [
            'icon' => 'bi-person-fill-check',
            'number' => '60+',
            'text' => 'Guru & Staf Pengajar'
        ],
        [
            'icon' => 'bi-clock-fill',
            'number' => '10+ Tahun',
            'text' => 'Rata-rata Pengalaman Mengajar'
        ],
        [
            'icon' => 'bi-lightbulb-fill',
            'number' => '15+',
            'text' => 'Sertifikasi Industri'
        ],
    ];

    // tim

$tim = [
    [
        'kategori' => 'manajemen',
        'foto' => 'assets/img/pegawai/pa nano.png',
        'nama' => 'Nano Supriatna, M.Kom',
        'jabatan' => 'Kepala Sekolah',
        'sosmed' => ['facebook', 'twitter', 'linkedin']
    ],
    [
        'kategori' => 'manajemen',
        'foto' => 'assets/img/pegawai/BUSRI.png',
        'nama' => 'Sri Nani, S.T',
        'jabatan' => 'Waka Kurikulum',
        'sosmed' => ['facebook', 'instagram', 'linkedin']
    ],
    [
        'kategori' => 'manajemen',
        'foto' => 'assets/img/pegawai/NUNUNG.png',
        'nama' => 'Nunung Nurhalipa, S.Pd',
        'jabatan' => 'Waka Kesiswaan',
        'sosmed' => ['instagram', 'twitter']
    ],
    [
        'kategori' => 'manajemen',
        'foto' => 'assets/img/pegawai/BUDELIA.png',
        'nama' => 'Delia Isnaenim, S.Ak',
        'jabatan' => 'Waka Kesiswaan',
        'sosmed' => ['instagram', 'twitter']
    ],
    [
        'kategori' => 'guru',
        'foto' => 'assets/img/pegawai/eko.jpg',
        'nama' => 'Eko Prasetyo, S.Si., M.Sc.',
        'jabatan' => 'Kepala Jurusan RPL',
        'sosmed' => ['linkedin']
    ],
    [
        'kategori' => 'guru',
        'foto' => 'assets/img/pegawai/guru_tkj1.png',
        'nama' => 'Nama Guru TKJ',
        'jabatan' => 'Guru Jaringan',
        'sosmed' => []
    ]
];

// Daftar kategori yang akan ditampilkan
$kategoriList = [
    'manajemen' => 'Manajemen',
    'guru' => 'Pendidik',
    'staf' => 'Tenaga Kependidikan'
];

// cta
 komponen("cta");

    $judul="Ingin Menjadi Bagian dari Tim Inovatif Kami?";
    $deskripsi="Kami terus mencari individu berbakat dan bersemangat yang siap memberikan dampak positif dalam pendidikan vokasi.";
    $link="hubinmas/karir";
    $btn="Lihat Lowongan Karir";
    $ikon="bi-briefcase-fill";
