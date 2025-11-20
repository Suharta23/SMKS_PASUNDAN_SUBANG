<?php

    $judul_hero1="Kurikulum ";
    $judul_hero2="Sekolah";
    $subjudul_hero="Pondasi pendidikan vokasi yang adaptif dan berkarakter.";

	komponen("card_layout");

    $kurikulum1=query("SELECT * FROM layout_card WHERE id_layout=1")[0];
    $kurikulum1_isi=query("SELECT * FROM isi_card WHERE card=1");

    $judulcard= tag($kurikulum1['judul_card1']);
    $subjudul=$kurikulum1['subjudul_card1'];
    $bg=$kurikulum1['bg_card'];

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
    $thead = ["No", "Nama", "Keterangan"];
    $rows = [
        [1, "Item Satu", "Contoh keterangan"],
        [2, "Item Dua", "Contoh lainnya"]
    ];
    $tabel = komponenTabel("", $thead, $rows);

    komponen("layout1");

    $judul_struktur = [
        "judul" => "Rincian <span class='teg'>Struktur</span> Kurikulum",
        "deskripsi" => "Program pembelajaran dibagi berdasarkan alokasi waktu dan fokus pengembangan siswa:",
        "bg" => "bg-white", // bisa diubah: bg-white, bg-light, atau bg-body
        "gambar" => "assets/img/konten/struktur_kurikulum.png"
    ];

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

