<?php

// Struktur menu pakai array asosiatif
$menu = [
    [
        "judul" => "Beranda",
        "page" => "beranda",
        "file" => ""
    ],

    [
        "judul" => "Profil",
        "submenu" => [
            ["judul" => "Sambutan", "page" => "profil", "file" => "sambutan"],
            ["judul" => "Visi Misi", "page" => "profil", "file" => "visi_misi"],
            ["judul" => "Sejarah", "page" => "profil", "file" => "sejarah"],
            ["judul" => "Identitas", "page" => "profil", "file" => "identitas"],
            ["judul" => "Pendidik dan Tenaga Kependidikan", "page" => "profil", "file" => "pegawai"],
            ["judul" => "Peserta Didik", "page" => "profil", "file" => "peserta_didik"],
            ["judul" => "Galeri", "page" => "profil", "file" => "galeri"],
        ]
    ],

    [
        "judul" => "Kurikulum",
        "submenu" => [
            ["judul" => "Kurikulum", "page" => "kurikulum", "file" => "kurikulum"],
            ["judul" => "Intrakurikuler", "page" => "kurikulum", "file" => "intrakurikuler"],
            ["judul" => "Kokurikuler", "page" => "kurikulum", "file" => "kokurikuler"],
            ["judul" => "Asesmen Sumatif Berbasis Komputer (ASBK)", "page" => "kurikulum", "file" => "asbk"],
            ["judul" => "Ujian Sekolah Berbasis Komputer (USBK)", "page" => "kurikulum", "file" => "usbk"],
            ["judul" => "Asesmen Nasional Berbasis Komputer (ANBK)", "page" => "kurikulum", "file" => "anbk"],
            ["judul" => "Tes Kemampuan Akademik (TKA)", "page" => "kurikulum", "file" => "tka"],
            ["judul" => "Survey Lingkungan Belajar (Sulingjar)", "page" => "kurikulum", "file" => "sulingjar"],
            ["judul" => "Asesmen Minat Bakat (ABM)", "page" => "kurikulum", "file" => "abm"],
            ["judul" => "Buletin Ramadhan", "page" => "kurikulum", "file" => "buletin_ramadhan"],
            ["judul" => "Supervisi", "page" => "kurikulum", "file" => "supervisi"],
            ["judul" => "Magang Guru", "page" => "kurikulum", "file" => "magang_guru"],
            ["judul" => "Sinkronisasi Kurikulum", "page" => "kurikulum", "file" => "sinkronisasi"],
            ["judul" => "Guru Tamu", "page" => "kurikulum", "file" => "guru_tamu"],
        ]
    ],

    [
        "judul" => "Kesiswaan",
        "submenu" => [
            ["judul" => "Program Makan Bergizi Gratis (MBG)", "page" => "kesiswaan", "file" => "mbg"],
            ["judul" => "Program Sapoe Saribu (Poe Ibu)", "page" => "kesiswaan", "file" => "poeibu"],
            ["judul" => "Ekstrakurikuler", "page" => "kesiswaan", "file" => "ekskul"],
            ["judul" => "Program Sambut Siswa", "page" => "kesiswaan", "file" => "sambut_siswa"],
            ["judul" => "Program Sarapan Bareng (Sabar)", "page" => "kesiswaan", "file" => "sabar"],
            ["judul" => "Program Ngaji Bareng (Ngabar)", "page" => "kesiswaan", "file" => "ngabar"],
            ["judul" => "Program K-7", "page" => "kesiswaan", "file" => "k7"],
        ]
    ],

    [
        "judul" => "Hubinmas",
        "submenu" => [
            ["judul" => "Bursa Kerja Khusus (BKK)", "page" => "hubinmas", "file" => "bkk"],
            ["judul" => "Mitra Dunia Usaha dan Industri", "page" => "hubinmas", "file" => "mitra_dudi"],
            ["judul" => "Program Luar Negeri", "page" => "hubinmas", "file" => "program_ln"],
            ["judul" => "Penelurusan Alumni", "page" => "hubinmas", "file" => "alumni"],
            ["judul" => "Testimoni", "page" => "hubinmas", "file" => "testimoni"],
        ]
    ],

    [
        "judul" => "Fasilitas",
        "submenu" => [
            ["judul" => "Ruang Pembelajaran", "page" => "sarpras", "file" => "ruang_pembelajaran"],
            ["judul" => "Layanan Pendidikan", "page" => "sarpras", "file" => "layanan_pendidikan"],
            ["judul" => "Umum", "page" => "sarpras", "file" => "umum"],
        ]
    ],

    [
        "judul" => "Jurusan",
        "submenu" => [
            ["judul" => "Teknik Kendaraan Ringan", "page" => "jurusan", "file" => "tkr"],
            ["judul" => "Rekayasa Perangkat Lunak", "page" => "jurusan", "file" => "rpl"],
            ["judul" => "Teknik Komputer dan Jaringan", "page" => "jurusan", "file" => "tkj"],
            ["judul" => "Akuntansi", "page" => "jurusan", "file" => "akuntansi"],
            ["judul" => "Perkantoran", "page" => "jurusan", "file" => "perkantoran"],
            ["judul" => "Perhotelan", "page" => "jurusan", "file" => "perhotelan"],
        ]
    ],

    [
        "judul" => "Informasi",
        "submenu" => [
            ["judul" => "Artikel", "page" => "informasi", "file" => "artikel"],
            ["judul" => "Berita", "page" => "informasi", "file" => "berita"],
        ]
    ],

    [
        "judul" => "Produk",
        "page" => "produk",
        "file" => ""
    ],

    [
        "judul" => "Kontak",
        "page" => "kontak",
        "file" => ""
    ],
];

// fungsi menentukan apakah menu aktif
function isActiveMenu($menuItem, $page, $file) {
    // jika tidak ada submenu
    if (!isset($menuItem['submenu'])) {
        if ($menuItem['page'] === $page && ($menuItem['file'] === $file || $menuItem['file'] === '')) {
            return 'active';
        }
        // aktifkan beranda kalau url kosong
        if ($page === '' && $menuItem['page'] === 'beranda') {
            return 'active';
        }
        return '';
    }

    // jika ada submenu
    foreach ($menuItem['submenu'] as $sub) {
        if ($sub['page'] === $page && $sub['file'] === $file) {
            return 'active';
        }
    }
    return '';
}
?>

<header>
    <nav class="navbar navbar-expand-lg bg-navbar fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between j-nav">
            <a class="navbar-brand py-3" href="./">
                <img src="assets/img/logo/logo2.png" width="240" alt="Logo Sekolah">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" data-bs-scroll="true">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav mx-auto pt-3">
                        <?php foreach ($menu as $m): ?>
                            <?php $activeClass = isActiveMenu($m, $page, $file); ?>
                            <?php if (isset($m['submenu'])): ?>
                                <li class="nav-item dropdown px-1">
                                    <a class="nav-link dropdown-toggle <?= $activeClass ?>" href="#" data-bs-toggle="dropdown">
                                        <?= $m['judul'] ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($m['submenu'] as $sub): ?>
                                            <li>
                                                <a class="dropdown-item py-2 <?= ($sub['page'] === $page && $sub['file'] === $file) ? 'active' : '' ?>"
                                                   href="/<?= $sub['page'] ?>/<?= $sub['file'] ?>">
                                                    <?= $sub['judul'] ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link <?= $activeClass ?>"
                                       href="/<?= $m['page'] ?><?= $m['file'] ? "&file={$m['file']}" : '' ?>">
                                        <?= $m['judul'] ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                    <a href="tour" class="btn btn-main ms-3 my-2" target="_blank">Tour</a>
                </div>
            </div>
        </div>
    </nav>
</header>