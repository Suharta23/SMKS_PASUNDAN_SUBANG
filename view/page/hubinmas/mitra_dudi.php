<main>

    <?php 
    layout1(
        $id,
        $judul,
        $highlight,
        $teks_awal,
        $kutipan,
        $judul_list,
        $dasar,
        $gambar,
        $alt
    ); 
    ?>

    <?php 
    tampilkanTahapan(
        $judul_nilai,
        $subjudul,
        $bg,
        $isi
    );
    ?>

    <section id="daftar-mitra" class="py-5">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Jejaring Mitra <span class="teg">Terkemuka</span> Kami</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Kami menjalin kemitraan aktif dengan puluhan perusahaan terbaik di Indonesia.</p>
            </div>
            
            <div class="row g-3 logo-grid justify-content-center">
                <?php 
                $delay = 200;
                foreach ($mitra_list as $mitra): ?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="<?= $delay ?>">
                        <div class="logo-item"><img src="<?= $mitra['logo'] ?>" class="logo-img" alt="<?= $mitra['alt'] ?>"></div>
                    </div>
                <?php 
                    $delay += 50;
                endforeach; ?>
            </div>
        </div>
    </section>

    <?php 
    cta(
        $judul, 
        $deskripsi, 
        $link, 
        $btn, 
        $ikon
    );
    ?>

</main>
