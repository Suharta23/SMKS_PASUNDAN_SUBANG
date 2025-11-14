<?php

    $judul_hero1="Penelusuran";
    $judul_hero2="Alumni";

    $subjudul_hero="Menjaga koneksi dan memetakan karir lulusan SMKS Pasundan Subang.";

    komponen("layout1");

    $id= 'tracer-study';
    $judul= 'Mekanisme ';
    $highlight= 'Tracer Study';
    $teks_awal= '<strong>Penelusuran Alumni</strong> atau <strong>Tracer Study </strong> adalah proses pengumpulan data dan informasi mengenai status karir lulusan kami (bekerja, wirausaha, atau melanjutkan studi) dalam kurun waktu tertentu setelah kelulusan.';
    $kutipan= 'Informasi dari alumni sangat vital karena menjadi barometer kesuksesan program vokasi kami dan menjadi umpan balik (feedback) langsung untuk perbaikan kurikulum.';
    $judul_list="Tiga Pilar Status Alumni:";

    $dasar= [
        '<strong>Bekerja:</strong> Penempatan di DUDI mitra (Diserap BKK).',
        '<strong>Melanjutkan Studi:</strong> Alumni yang melanjutkan ke jenjang perguruan tinggi.',
        '<strong>Wirausaha:</strong>Alumni yang sukses membangun bisnis sendiri.'
    ];

    $gambar= 'assets/img/hubinmas/tracer_study_diagram.png';
    $alt= 'Diagram Alur Tracer Study';

    // card layout
    komponen("card_layout");

    $judul_nilai="Peran Alumni dalam Ekosistem Sekolah";
    $subjudul='Alumni bukan hanya statistik, melainkan mitra strategis dalam pengembangan vokasi.';
    $bg='bg-light';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-mic-fill',
            'warna' => 'bg-second',
            'judul' => 'Narasumber & Guru Tamu',
            'teks' => 'Alumni yang sukses di industri sering diundang kembali untuk berbagi pengalaman dan wawasan (soft skills) kepada siswa aktif.'
        ],
        [
            'icon' => 'bi-diagram-3-fill',
            'warna' => 'bg-main',
            'judul' => 'Jaringan Karir (Networking)',
            'teks' => 'Menjadi referensi utama bagi adik kelas dalam mencari informasi magang dan lowongan kerja di perusahaan tempat alumni bekerja.'
        ],
        [
            'icon' => 'bi-arrow-repeat',
            'warna' => 'bg-second',
            'judul' => 'Umpan Balik Kurikulum',
            'teks' => 'Masukan dari alumni digunakan tim kurikulum untuk menyelaraskan materi ajar agar 100% relevan dengan kebutuhan industri saat ini.'
        ]
    ];

    // cta
    komponen("cta");

    $judul="Alumni, Kami Menanti Kabar Anda!";
    $deskripsi="Partisipasi Anda dalam Tracer Study sangat berharga untuk kemajuan adik-adik Anda dan kualitas pendidikan SMKS Pasundan Subang.";
    $link="#";
    $btn="Isi Form Tracer Study";
    $ikon="bi-pencil-square";

?>

