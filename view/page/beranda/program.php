
<!-- SECTION PROGRAM -->
    <section id="program" class="py-5">
        <div class="container py-4">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="display-5 fw-bold txt-judul" data-aos="fade-up">
                    <?= $txt_j_program1 ?> <span class="teg"><?= $txt_j_program1 ?></span>
                </h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                    <?= $des_program ?>
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Program sekolah -->
                <?php foreach ($programs as $program): ?>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $program['delay'] ?>">
                        <div class="card shadow-sm h-100 p-4 text-center program-card rd-20 txt-dark">
                            <i class="<?= $program['icon'] ?> fs-1 txt-main mb-3"></i>
                            <h4 class="fw-bold">
                                <?= $program['title'] ?>
                            </h4>
                            <p class="text-muted txt-justify">
                                <?= $program['description'] ?>
                            </p>
                            <a href="<?= $program['link'] ?>" class="btn btn-second btn-sm mt-2">Lihat Detail</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <!-- program sekolah end -->
            </div>
        </div>
    </section>
    <!-- END SECTION PROGRAM -->