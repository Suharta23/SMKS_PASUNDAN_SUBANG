<?php 
    $ttg_j_jurusan="Kompetensi Keahlian";
    $txt_j_jurusan1="Jurusan Pilihan";
    $txt_j_jurusan2="Siap Industri";


$jurusan = [
    [
        "nama" => "Rekayasa Perangkat Lunak",
        "singkatan" => "RPL",
        "deskripsi" => "Menjadi programmer, web developer, dan analis sistem.",
        "gambar" => "assets/img/jurusan/rpl.png",
        "link" => "/jurusan/rpl"
    ],
    [
        "nama" => "Teknik Komputer & Jaringan",
        "singkatan" => "TKJ",
        "deskripsi" => "Ahli infrastruktur jaringan, administrator server, dan keamanan siber.",
        "gambar" => "assets/img/jurusan/tkj.png",
        "link" => "/jurusan/tkj"
    ],
    [
        "nama" => "Teknik Kendaraan Ringan",
        "singkatan" => "TKR",
        "deskripsi" => "Spesialis mekanik, servis berkala, dan teknologi otomotif modern.",
        "gambar" => "assets/img/jurusan/tkr.png",
        "link" => "/jurusan/tkr"
    ],
    [
        "nama" => "Akuntansi",
        "singkatan" => "AK",
        "deskripsi" => "Tenaga profesional keuangan, perpajakan, dan audit junior.",
        "gambar" => "assets/img/jurusan/ak.png",
        "link" => "/jurusan/akuntansi"
    ],
    [
        "nama" => "Administrasi Perkantoran",
        "singkatan" => "MP",
        "deskripsi" => "Mempersiapkan tenaga terampil dalam pengelolaan surat, arsip, dan pelayanan administrasi perkantoran.",
        "gambar" => "assets/img/jurusan/mp.png",
        "link" => "/jurusan/perkantoran"
    ],
    [
        "nama" => "Perhotelan",
        "singkatan" => "HTL",
        "deskripsi" => "Menguasai front office, housekeeping, dan layanan hospitality.",
        "gambar" => "assets/img/jurusan/htl.png",
        "link" => "/jurusan/perhotelan"
    ]
];


 ?>

<!-- SECTION JURUSAN -->
    <section id="jurusan" class="py-5">
        <div class="container py-4">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h6 class="ttg-judul" data-aos="fade-up"><?= $ttg_j_jurusan ?></h6>
                <h2 class="txt-judul" data-aos="fade-up" data-aos-delay="100">
                    <?= $txt_j_jurusan1 ?> <span class="teg"><?= $txt_j_jurusan2 ?></span>
                </h2>
            </div>
            <div class="row g-4">

                <?php foreach ($jurusan as $j): ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up">
                    <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                        <img src="<?= $j['gambar'] ?>" class="img-fluid rd-10" alt="<?= $j['singkatan'] ?>" />
                        <div class="card-body p-4">
                            <h5 class="fw-bold"><?= $j['nama'] ?></h5>
                            <p class="text-muted small"><?= $j['deskripsi'] ?></p>
                            <a href="<?= $j['link'] ?>" class="btn btn-main">
                                Lihat Detail <i class="bi bi-arrow-right-short text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- END SECTION JURUSAN -->