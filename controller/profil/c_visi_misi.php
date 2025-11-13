    <?php

        $judul_hero1="Visi & ";
        $judul_hero2="Misi Kami";
        $subjudul_hero="Landasan dan semangat SMKS Pasundan Subang dalam mendidik.";


    // data/visi_misi.php

    $visi = "Mewujudkan SMK yang unggul dalam mencetak insan yang Berakhlak Mulia, Kreatif, Inovatif, Terampil, Mandiri dan Berbudaya.";

    $misi = [
        "Membentuk peserta didik yang taat beribadah.",
        "Membentuk peserta didik memiliki sikap dan perilaku yang baik, santun, sopan, amanah dan berkarakter.",
        "Membentuk peserta didik dalam mengembangkan, melaksanakan, dan menyampaikan gagasan-gagasan baru dan bersikap terbuka terhadap perspektif baru dan berbeda.",
        "Membentuk peserta didik dalam mengembangkan karya dan hal-hal yang baru.",
        "Membentuk peserta didik memiliki keterampilan berpikir kritis, kolaborasi dan berkomunikasi.",
        "Membentuk peserta didik dalam berwirausaha.",
        "Menciptakan suasana pembelajaran dengan budaya kerja.",
        "Menciptakan suasana mencintai budaya lokal dan nasional.",
        "Menciptakan interaksi yang baik dengan budaya internasional."
    ];


    // card layout
    komponen("card_layout");

    $judul_nilai="Nilai-Nilai Utama Kami";
    $subjudul='Prinsip yang memandu setiap langkah kami dalam komunitas sekolah.';
    $bg='bg-white';

    // Data custom
    $isi = [
        [
            'icon' => 'bi-shield-check',
            'warna' => 'bg-main',
            'judul' => 'Integritas',
            'teks' => 'Menjunjung tinggi kejujuran, etika, dan tanggung jawab dalam setiap tindakan.'
        ],
        [
            'icon' => 'bi-lightbulb-fill',
            'warna' => 'bg-main',
            'judul' => 'Inovatif',
            'teks' => 'Selalu terbuka terhadap ide-ide baru, kreatif, dan mencari solusi terbaik dalam pendidikan.'
        ],
        [
            'icon' => 'bi-people-fill',
            'warna' => 'bg-main',
            'judul' => 'Kolaboratif',
            'teks' => 'Mendorong kerja sama yang solid antar siswa, guru, orang tua, dan masyarakat.'
        ]
    ];

// card layput end


    komponen("cta");

    $judul="Lihat Bagaimana Visi Ini Kami Wujudkan";
    $deskripsi="Pelajari struktur kurikulum kami yang terintegrasi dengan kebutuhan dunia industri.";
    $link="kurikulum/kurikulum";
    $btn="Lihat Kurikulum Sekolah";
    $ikon="bi-arrow-right-circle-fill";

    ?>