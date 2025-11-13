       
    <section id="pengantar-siswa" class="pt-2 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="txt-judul fw-bold mb-3" data-aos="fade-up"><?= $pengantar_j1 ?> <span class="teg"><?= $pengantar_j2 ?></span></h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                        <?= $pengantar_lead ?>
                    </p>
                    <p class="text-muted" data-aos="fade-up" data-aos-delay="200">
                        <?= $pengantar_txt ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="facts-section" data-aos="fade-up">
        <div class="container text-center">
            <h2 class="txt-judul text-light mb-5" data-aos="fade-up"><?= $judul ?></h2>
            <div class="row g-4 justify-content-center ">

                <?php foreach ($stats as $sts): ?>
                    <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="stats-item-upgrade">
                            <i class="bi <?= $sts['icon'] ?> icon-upgrade"></i>
                            <div class="number-upgrade  text-light "><?= $sts['number'] ?></div>
                            <div class="text-upgrade  text-light "><?= $sts['text'] ?></div>
                        </div>
                    </div>
                <?php endforeach ?>
               
            </div>
        </div>
    </section>

<!-- organisasi siswa -->
    <section id="<?= $l_gbr['id']; ?>" class="py-5 <?= $l_gbr['bg']; ?>">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="<?= $l_gbr['image']; ?>" 
                         class="img-fluid rd-20 shadow-lg" 
                         alt="<?= $l_gbr['alt']; ?>">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <h6 class="ttg-judul"><?= $l_gbr['subtitle']; ?></h6>
                    <h2 class="txt-judul mb-4"><?= $l_gbr['title']; ?></h2>
                    <p class="lead text-muted txt-justify"><?= $l_gbr['lead']; ?></p>
                    <p class="txt-justify"><?= $l_gbr['desc']; ?></p>

                    <ul class="list-unstyled mt-3 fs-5">
                        <?php foreach ($l_gbr['kegiatan'] as $item): ?>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill txt-main me-2"></i>
                                <?= $item; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!-- organisasi siswa end -->


    <?php 

        tampilkanTahapan(
            $judul_eskul,
            $subjudul,
            $bg,
            $isi
        );

     ?>
    <div class="text-center py-5 bg-light">
        <a href="kesiswaan/ekskul" class="btn btn-main btn-lg" data-aos="fade-up" data-aos-delay="500">Lihat Semua Ekstrakurikuler</a>
    </div>


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