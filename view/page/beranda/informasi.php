
 
 <!-- SECTION INFORMASI -->
    <section id="informasi" class="py-5">
        <div class="container py-4">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h6 class="ttg-judul" data-aos="fade-up"><?= $ttg_j_informasi ?></h6>
                <h2 class="txt-judul" data-aos="fade-up" data-aos-delay="100">
                    <?= $txt_j_informasi1 ?> <span class="teg"><?= $txt_j_informasi2 ?></span>
                </h2>
            </div>

            <div class="row g-4">
                <?php foreach ($informasi as $info): ?>
            
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card shadow h-100 border-0 rd-20 p-3 txt-dark">
                            <img src="<?= $info['img_info'] ?>" class="img-fluid rd-10" alt="<?= $info['j_info'] ?>" />
                            <div class="card-body p-4">
                                <span class="badge bg-danger bg-opacity-10 text-danger mb-2"><?= $info['ttg_info'] ?></span>
                                <h5 class="card-title fw-bold"><?= $info['j_info'] ?></h5>
                                <p class="card-text text-muted small"><?= $info['tgl_info'] ?></p>
                                <a href="/informasi/berita" class="btn btn-main">Baca Selengkapnya <i class="bi bi-arrow-right-short text-white"></i></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>
        </div>
    </section>
    <!-- END SECTION INFORMASI -->