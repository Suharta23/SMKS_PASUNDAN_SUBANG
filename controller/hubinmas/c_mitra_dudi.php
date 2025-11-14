<?php

    $judul_hero1="Jejaring";
    $judul_hero2="Mitra Industri";

    $subjudul_hero="Kemitraan strategis untuk memastikan kurikulum selalu relevan dengan dunia kerja.";

    komponen("layout1");

    $id= 'filosofi';
    $judul= 'Link & Match: ';
    $highlight= 'Bukan Sekadar Kata';
    $teks_awal= 'Kemitraan kami dengan industri adalah jantung dari pendidikan vokasi di SMKS Pasundan Subang. Kami tidak hanya mengirim siswa magang, tetapi memastikan adanya sinkronisasi kurikulum total.';
    $kutipan= 'Kolaborasi ini menjamin bahwa setiap kompetensi keahlian yang kami ajarkan teruji relevansinya, sehingga lulusan kami memiliki daya serap kerja yang tinggi dan minim adaptasi saat memasuki dunia profesional.';
    $judul_list="";

    $dasar= [];

    $gambar= 'assets/img/program/link_match_filosofi.png';
    $alt= 'Ilustrasi Link and Match';

    // card layout
    komponen("card_layout");

    $judul_nilai="Fokus Kerjasama Kami";
    $subjudul='Tiga pilar utama yang kami jalankan bersama puluhan mitra industri.';
    $bg='bg-light';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-arrow-repeat',
            'warna' => 'bg-main',
            'judul' => 'Sinkronisasi Kurikulum',
            'teks' => 'Melibatkan pakar industri dalam peninjauan dan pengembangan modul ajar dan unit kompetensi terbaru.'
        ],
        [
            'icon' => 'bi-person-badge',
            'warna' => 'bg-main',
            'judul' => 'Magang Industri (PKL)',
            'teks' => 'Penempatan wajib bagi siswa di perusahaan mitra untuk pengalaman kerja nyata selama minimal 6 bulan.'
        ],
        [
            'icon' => 'bi-briefcase-fill',
            'warna' => 'bg-main',
            'judul' => 'Rekrutmen & Penyerapan',
            'teks' => 'Mitra memprioritaskan perekrutan lulusan kami, seringkali langsung dari program magang.'
        ]
    ];

    // Data mitra untuk ditampilkan di view
    $mitra_list = [
        ['logo' => 'assets/img/logo/mitra/MITSUBISHI.png', 'alt' => 'Mitsubishi'],
        ['logo' => 'assets/img/logo/mitra/ASTON.png', 'alt' => 'Aston Hotel'],
        ['logo' => 'assets/img/logo/mitra/gothru.png', 'alt' => 'Gothru'],
        ['logo' => 'assets/img/logo/mitra/BSI.png', 'alt' => 'BSI'],
        ['logo' => 'assets/img/logo/mitra/SARI ATER.png', 'alt' => 'Sari Ater'],
        ['logo' => 'assets/img/logo/mitra/LPK-CIS.png', 'alt' => 'LPK CIS'],
        ['logo' => 'assets/img/logo/mitra/PNM.png', 'alt' => 'PNM'],
        ['logo' => 'assets/img/logo/mitra/BANTEX.png', 'alt' => 'BANTEX'],
        ['logo' => 'assets/img/logo/mitra/BPR.png', 'alt' => 'BPR'],
        ['logo' => 'assets/img/logo/mitra/IHKA.png', 'alt' => 'IHKA'],
        ['logo' => 'assets/img/logo/mitra/WINTER.png', 'alt' => 'WINTER'],
        ['logo' => 'assets/img/logo/mitra/GPI.png', 'alt' => 'GPI'],
        ['logo' => 'assets/img/logo/mitra/LPPBK.png', 'alt' => 'LPPBK'],
        ['logo' => 'assets/img/logo/mitra/aspapi-jawa-barat.png', 'alt' => 'ASPAPI']
    ];

    // cta
    komponen("cta");

    $judul="Bergabunglah dalam Ekosistem Kemitraan Kami";
    $deskripsi="Perusahaan Anda dapat berpartisipasi dalam pengembangan kurikulum, magang, dan rekrutmen lulusan terbaik.";
    $link="kontak";
    $btn="Ajukan Proposal Kemitraan";
    $ikon="bi-handshake-fill";

?>

