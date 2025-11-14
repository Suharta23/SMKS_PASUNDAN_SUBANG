<?php

    $judul_hero1="Program ";
    $judul_hero2="Luar Negeri";

    $subjudul_hero="Wujudkan karir global Anda melalui Magang dan Penempatan Kerja di Asia Tenggara.";

    komponen("layout1");

    $id= 'pendahuluan';
    $judul= 'Pengalaman Kerja ';
    $highlight= 'Internasional';
    $teks_awal= 'Program Luar Negeri (PLN) adalah inisiatif Hubinmas untuk memberikan kesempatan kepada lulusan terbaik agar dapat mengaplikasikan ilmu dan keterampilan vokasi mereka di pasar kerja global.';
    $kutipan= 'Kami menjalin kerja sama dengan berbagai agensi dan perusahaan di negara-negara maju untuk program **Magang (Internship)** dan **Penempatan Kerja Permanen** yang terstruktur, terutama di sektor unggulan seperti industri pariwisata, manufaktur, dan teknologi informasi.';
    $judul_list="Apa Manfaatnya?";

    $dasar= [
        'Pengalaman kerja dengan standar internasional.',
        'Gaji dan fasilitas yang kompetitif (kurs mata uang asing).',
        'Peningkatan kemampuan berbahasa asing.'
    ];

    $gambar= 'assets/img/hubinmas/program_luar_negeri.png';
    $alt= 'Ilustrasi Magang di Luar Negeri';

    // card layout
    komponen("card_layout");

    $judul_nilai="Fokus Negara Target Kami";
    $subjudul='Program Luar Negeri saat ini difokuskan pada kawasan Asia yang memiliki kebutuhan tinggi terhadap tenaga kerja profesional dan vokasional.';
    $bg='bg-light';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-flag-fill',
            'warna' => 'bg-main',
            'judul' => 'Jepang',
            'teks' => 'Fokus pada bidang Manufaktur, Teknologi Informasi, dan Perhotelan. Membutuhkan sertifikasi bahasa N4.'
        ],
        [
            'icon' => 'bi-flag-fill',
            'warna' => 'bg-second',
            'judul' => 'Singapura',
            'teks' => 'Peluang besar di sektor Pariwisata, Hospitality, dan Administrasi Bisnis. Bahasa utama: Inggris.'
        ],
        [
            'icon' => 'bi-flag-fill',
            'warna' => 'bg-main',
            'judul' => 'Malaysia',
            'teks' => 'Pilihan karir di bidang Akuntansi dan Industri Perkebunan/Manufaktur. Bahasa utama: Melayu/Inggris.'
        ]
    ];

    // Data syarat
    $syarat_list = [
        'Lulusan SMKS Pasundan Subang (Maks. 2 tahun setelah lulus).',
        'Memiliki sertifikat kompetensi dari BNSP atau LSP Pihak 1.',
        'Bersedia mengikuti pelatihan bahasa dan budaya selama 3-6 bulan.',
        'Kondisi kesehatan prima dan usia maksimal 23 tahun.'
    ];

?>

