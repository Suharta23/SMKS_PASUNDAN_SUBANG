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

    <section id="daftar-testimoni" class="py-5 bg-light">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Kumpulan <span class="teg">Kisah Nyata</span></h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Dengarkan pengalaman langsung dari mereka yang terlibat dengan SMKS Pasundan Subang.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <?php 
                $delay = 200;
                foreach ($testimoni_list as $testi): ?>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?= $delay ?>">
                        <div class="card p-4 shadow-lg h-100 border-top border-5 <?= $testi['border_color'] ?> rd-10">
                            <div class="text-center mb-3">
                                <img src="<?= $testi['foto'] ?>" class="rounded-circle mb-3 shadow-sm" width="80" alt="Foto Testimoni" />
                                <h5 class="fw-bold mb-0"><?= $testi['nama'] ?></h5>
                                <p class="text-muted small"><?= $testi['jabatan'] ?></p>
                            </div>
                            <i class="bi bi-quote fs-4 txt-main"></i>
                            <p class="card-text fst-italic text-justify"><?= $testi['kutipan'] ?></p>
                            <div class="mt-auto text-end">
                                <span class="badge <?= $testi['badge_color'] ?>"><?= $testi['badge'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php 
                    $delay += 100;
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
        $ikon,
        $bg
    );
    ?>

</main>