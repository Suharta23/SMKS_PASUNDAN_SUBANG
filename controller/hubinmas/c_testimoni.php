<?php

    $judul_hero1="Apa Kata ";
    $judul_hero2="Mereka?";

    $subjudul_hero="Kisah sukses dan kesan positif dari Alumni, Mitra Industri, dan Orang Tua Siswa.";

    komponen("layout1");

    $id= 'pengantar';
    $judul= 'Bukti Nyata ';
    $highlight= 'Kualitas Lulusan';
    $teks_awal= 'Halaman ini didedikasikan untuk berbagi pandangan jujur dari berbagai pihak yang merasakan dampak positif dari pendidikan vokasi di SMKS Pasundan Subang.';
    $kutipan= 'Testimoni ini bukan hanya pujian, tetapi menjadi umpan balik yang berharga untuk terus meningkatkan kualitas kurikulum dan layanan Link & Match kami.';
    $judul_list="Penyumbang Testimoni:";

    $dasar= [
        'Alumni yang sudah sukses di industri.',
        'Perusahaan Mitra yang merekrut lulusan kami.',
        'Orang Tua yang merasakan perubahan positif pada anaknya.'
    ];

    $gambar= 'assets/img/hubinmas/testimoni_intro.png';
    $alt= 'Ilustrasi Testimoni';

    // Data testimoni
    $testimoni_list = [
        [
            'foto' => 'assets/img/testimoni/alumni1.png',
            'nama' => 'Rizky Setiawan, S.Kom.',
            'jabatan' => 'Alumni RPL Angkatan 2020 | Developer, PT. Gothru',
            'kutipan' => '"Pelatihan coding di Pasundan sangat intensif. Berkat BKK, saya langsung direkrut di perusahaan IT besar setelah lulus. Kurikulumnya benar-benar sesuai industri!"',
            'badge' => 'Alumni & Bekerja',
            'badge_color' => 'bg-second',
            'border_color' => 'border-second'
        ],
        [
            'foto' => 'assets/img/testimoni/mitra1.png',
            'nama' => 'Bapak Hadi Gunawan',
            'jabatan' => 'Manager HRD, Sari Ater Hotel & Resort',
            'kutipan' => '"Siswa magang dari jurusan Perhotelan Pasundan memiliki disiplin dan etika kerja yang unggul. Mereka cepat beradaptasi dan punya inisiatif tinggi, standar kami terpenuhi."',
            'badge' => 'Mitra Industri',
            'badge_color' => 'bg-main',
            'border_color' => 'border-main'
        ],
        [
            'foto' => 'assets/img/testimoni/ortu1.png',
            'nama' => 'Ibu Siti Nurjanah',
            'jabatan' => 'Orang Tua Siswa Kelas X TKR',
            'kutipan' => '"Sejak ada Program Ngaji Bareng dan K-7, anak saya jadi lebih rajin beribadah dan sangat disiplin. Sekolah ini tidak hanya fokus pada motor, tapi juga moral anak."',
            'badge' => 'Orang Tua Siswa',
            'badge_color' => 'bg-second',
            'border_color' => 'border-second'
        ]
    ];

    // cta
    komponen("cta");

    $judul="Ingin Bagian dari Kisah Sukses Ini?";
    $deskripsi="Bantu kami melacak jejak karir Anda atau jadilah mitra industri kami!";
    $link="hubinmas/alumni";
    $btn="Isi Form Tracer Study";
    $ikon="bi-search";
    $bg="bg-main";

?>

