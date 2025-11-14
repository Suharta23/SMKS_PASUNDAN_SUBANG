<?php

    $judul_hero1="Kegiatan ";
    $judul_hero2="Kokurikuler";

    $subjudul_hero="Aktivitas pembelajaran terstruktur di luar jam pelajaran untuk pendalaman materi.";

    komponen("layout1");

    // isi layout 1

    $id= 'ekstrakurikuler';
    $judul= 'Mengembangkan Bakat';
    $highlight= 'di Luar Jam Sekolah';
    $teks_awal= 'Penguatan Teori <span class="teg">Melalui Praktik</span>';
    $kutipan= 'Kegiatan ini membantu membangun karakter; kerja sama; dan tanggung jawab sosial.';
    $judul_list="List";

    $dasar= [
        'Dilaksanakan di luar jam pelajaran.',
        'Bersifat pilihan sesuai minat siswa.',
        'Menunjang pengembangan karakter dan soft skills.'
    ];

    $gambar= 'assets/img/kurikulum/ekstrakurikuler_definisi.png';
    $alt= 'Ilustrasi Kegiatan Ekstrakurikuler';

    // isi layout 1 end


 // card layout
    komponen("card_layout");

    $judul_nilai="Fokus Pembelajaran Inti";
    $subjudul='Kegiatan intrakurikuler mencakup semua aktivitas belajar-mengajar yang terstruktur dalam mata pelajaran wajib.';
    $bg='bg-light';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-person-workspace',
            'warna' => 'bg-main',
            'judul' => 'Belajar-Mengajar Kelas',
            'teks' => 'Mencakup materi akademik umum dan materi kejuruan (vokasi) di dalam kelas atau lab kejuruan.'
        ],
        [
            'icon' => 'bi-flag-fill',
            'warna' => 'bg-main',
            'judul' => 'Upacara Bendera',
            'teks' => 'Menanamkan nilai nasionalisme, kedisiplinan, dan rasa bangga terhadap bangsa dan almamater.'
        ],
        [
            'icon' => 'bi-book-fill',
            'warna' => 'bg-main',
            'judul' => 'Kegiatan Keagamaan Rutin',
            'teks' => 'Contoh: Program Ngaji Bareng di pagi hari yang menjadi bagian wajib dari pembiasaan karakter.'
        ]
    ];

// card layput end

    komponen("cta");

    $judul="Pelajari Struktur Kurikulum Lebih Lanjut";
    $deskripsi="Lihat kegiatan yang mendukung dan melengkapi pembelajaran inti di luar jam pelajaran resmi.";
    $link="kurikulum/kokurikuler";
    $btn="Lihat Kegiatan Kokurikuler";
    $ikon="bi-arrow-right-circle-fill";

    ?>