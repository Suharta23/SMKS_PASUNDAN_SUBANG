<?php

    $judul_hero1="Kurikulum ";
    $judul_hero2="Sekolah";
    $subjudul_hero="Pondasi pendidikan vokasi yang adaptif dan berkarakter.";

	komponen("card_layout");

    $kurikulum1=query("SELECT * FROM layout_card WHERE id_layout=1")[0];
    $kurikulum1_isi=query("SELECT * FROM isi_card WHERE card=1");

    $judulcard= tag($kurikulum1['judul_card1']);
    $subjudul=$kurikulum1['subjudul_card1'];
    $bg=$kurikulum1['bg_card1'];

    // Data custom
    $isi = [];
    foreach ($kurikulum1_isi as $row) {
        $isi[] = [
            'icon'  => $row['icon'],
            'warna' => $row['warna'],
            'judul' => $row['judul'],
            'teks'  => $row['desk'] 
        ];
    }

    //struktur kurikulum
    komponen("tabel");
    $thead = ["Komponen", "Fokus", "Alokasi"];
    $rows = [
        ["Intrakurikuler", "Mata Pelajaran Wajib & Kejuruan", "70% Waktu Belajar"],
        ["P5", "Soft Skill & Karakter (Profil Pelajar Pancasila)", "20% Waktu Belajar"],
        ["Ekstrakurikuler", "Minat, Bakat, dan Komunitas Siswa", "Diluar Jam Tatap Muka"],
        ["Magang (PKL)", "Penerapan Kompetensi di DUDIKA", "Pada Semester Tertentu"]
    ];

    $tabel = komponenTabel("", $thead, $rows);

    komponen("layout1");

    $id= 'struktur_kurikulum';
    $judul= tag("Rincian Struktur Kurikulum");
    $teks_awal= 'Program pembelajaran dibagi berdasarkan alokasi waktu dan fokus pengembangan siswa:';
    $kutipan= '';
    $gambar= 'img/visi.png';
    $alt= 'Menuju Senja';
    $reverse=false;
    $tabel;
// bagian jurusan

 komponen("card_2");

$jurusan_card=query("SELECT * FROM layout_card WHERE id_layout=2")[0];
$jurusan_isi_data=query("SELECT * FROM isi_card2 WHERE card=2");

        $jurusan_judul=tag($jurusan_card['judul_card1']);
        $subjurusan_judul=$jurusan_card['subjudul_card1'];
        $jurusan_bg=$jurusan_card['bg_card1'];

$jurusan_list = [];
    foreach ($jurusan_isi_data as $row) {
        $jurusan_list[] = [
            "icon" => $row["icon"],
            "warna" => $row["warna"],
            "judul" => $row["judul"],
            "deskripsi" => $row["desk"],
            "link" => $row["link"],
            "btn" => $row["tombol"]
        ];
    }

komponen("tbl1");

// cta
    komponen("cta");

    $judul="Siap Menjadi Lulusan Kompeten?";
    $deskripsi="Kurikulum kami memastikan Anda siap bekerja dan berkarakter unggul.";
    $link="/kontak";
    $btn="Hubungi Tim Akademik";
    $ikon="bi-envelope-fill";

