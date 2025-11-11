<?php

    $judul_hero1="Sejarah ";
    $judul_hero2="Singkat Kami";

    $subjudul_hero="Perjalanan SMKS Pasundan Subang dari Masa ke Masa";

    $subjudul_hero="Data Pokok, Filosofi, dan Legalitas SMKS Pasundan Subang.";

     $section_akar = [
         'judul' => 'Akar Kami, <span class="teg">Inspirasi Kami</span>',
         'paragraf1' => 'Didirikan pada tahun 2000 SMKS Pasundan Subang berawal dari sebuah visi sederhana: menyediakan pendidikan berkualitas yang dapat diakses oleh semua.',
         'paragraf2' => 'Apa yang dimulai sebagai bangunan kecil dengan segelintir siswa kini telah berkembang menjadi salah satu institusi pendidikan terkemuka di Kabupaten Subang, melayani ratusan siswa dari berbagai latar belakang. Perjalanan kami adalah bukti nyata dari dedikasi, komunitas, dan komitmen yang tak tergoyahkan terhadap keunggulan.',
         'kutipan' => [
             'isi' => '"Kita tidak membangun sekolah ini hanya dengan batu bata. Kita membangunnya dengan impian, keringat, dan keyakinan bahwa setiap anak berhak atas masa depan yang cerah."',
             'sumber' => 'SMKS Pasundan Subang'
         ],
         'gambar' => [
             'baru' => 'assets/img/konten/gedung-baru.png',
             'lama' => 'assets/img/konten/gedung-lama.png'
         ]
     ];



$timeline_data = [
    [
        'icon' => 'bi-flag-fill',
        'year' => '2000',
        'title' => 'Pendirian SMKS Pasundan Subang',
        'desc' => 'Sekolah resmi dibuka oleh [Nama Pendiri] dengan 3 ruang kelas dan 25 siswa angkatan pertama. Fokus awal adalah pendidikan dasar (SD).'
    ],
    [
        'icon' => 'bi-building-fill',
        'year' => '2001',
        'title' => 'Mendapatkan Nomor Pokok Sekolah',
        'desc' => 'Menanggapi permintaan masyarakat, yayasan memperluas jenjang pendidikan dengan membuka Program SMP dan meresmikan gedung baru berlantai tiga.'
    ],
    [
        'icon' => 'bi-patch-check-fill',
        'year' => '2010',
        'title' => 'Meraih Akreditasi "A"',
        'desc' => 'Untuk pertama kalinya, SMKS Pasundan Subang berhasil meraih status Akreditasi "A" (Unggul) dari Badan Akreditasi Nasional (BAN-S/M).'
    ],
    [
        'icon' => 'bi-book-fill',
        'year' => '2015',
        'title' => 'Peluncuran Program SMA',
        'desc' => 'Jenjang SMA resmi dibuka dengan dua jurusan awal: IPA dan IPS, melengkapi layanan pendidikan kami dari dasar hingga menengah atas.'
    ],
    [
        'icon' => 'bi-laptop-fill',
        'year' => '2023',
        'title' => 'Transformasi Digital',
        'desc' => 'Meluncurkan sistem <em>Learning Management System</em> (LMS) terpadu dan program <em>Smart Classroom</em> untuk semua jenjang.'
    ],
    [
        'icon' => 'bi-stars',
        'year' => 'Masa Depan',
        'title' => 'Menuju Wawasan Global',
        'desc' => 'Kami terus berinovasi untuk mempersiapkan siswa menjadi pemimpin masa depan yang berwawasan global. (Lihat <a href="/profil/visi_misi">Visi & Misi</a> kami).',
        'color' => 'var(--second-color)' // bisa kosong kalau pakai warna default
    ]
];

   komponen("cta");

    $judul="Lihat <span class='teg'> Kisah Kami</span> Secara Visual";
    $deskripsi="Sejarah kami juga terekam dalam ribuan foto. Kunjungi galeri kami untuk melihat lebih banyak momen berharga.";
    $link="/profil/galeri";
    $btn="Kunjungi Galeri Foto";
    $ikon="bi-images";
    $bg="bg-light";

    ?>

?>