<?php

    $judul_hero1="Hubungi ";
    $judul_hero2="Kami";

    $subjudul_hero="Akses informasi tercepat ke tim SMKS Pasundan Subang.";

    // Data kontak cepat
    $kontak_list = [
        [
            'icon' => 'bi-geo-alt-fill',
            'judul' => 'Alamat Fisik',
            'teks' => 'Jl. Bagus Yabin No.06, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211',
            'link' => 'lokasi.php',
            'link_text' => 'Lihat di Peta & Panduan Rute'
        ],
        [
            'icon' => 'bi-clock-fill',
            'judul' => 'Jam Pelayanan Kantor',
            'teks' => '**Senin - Jumat:** 08.00 - 15.00 WIB<br>**Sabtu & Minggu:** Tutup',
            'link' => '',
            'link_text' => ''
        ],
        [
            'icon' => 'bi-headset',
            'judul' => 'Telepon & Email',
            'teks' => '<i class="bi bi-telephone-fill me-2 txt-main"></i> (0260) 411778<br><i class="bi bi-envelope-fill me-2 txt-main"></i> info@namasekolah.sch.id',
            'link' => '',
            'link_text' => ''
        ]
    ];

    // Data layanan kontak cepat
    $layanan_kontak = [
        'judul' => 'Hotline Sekolah',
        'teks' => '(0260) 411778 (Jam Kerja)',
        'judul2' => 'Kontak PPDB',
        'teks2' => 'Hubungi bagian pendaftaran untuk info biaya dan jadwal.',
        'wa_link' => 'https://wa.me/NOMORWA'
    ];

    // Data media sosial
    $sosmed_list = [
        ['icon' => 'bi-instagram', 'link' => '#'],
        ['icon' => 'bi-facebook', 'link' => '#'],
        ['icon' => 'bi-youtube', 'link' => '#'],
        ['icon' => 'bi-whatsapp', 'link' => '#']
    ];

    // CTA
    komponen("cta");

    $judul="Ikuti Kami di Media Sosial";
    $deskripsi="Dapatkan update cepat, galeri kegiatan, dan pengumuman melalui saluran resmi kami.";
    $link="#";
    $btn="";
    $ikon="";
    $bg="bg-main";

?>

