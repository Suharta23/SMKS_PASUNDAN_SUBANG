  <!-- SECTION HERO -->
    <section class="bg-img-hero bg-body-tertiary" data-aos="fade-up">
        <div class="hero">
            <div class="container-fluid hero-fl">
                <div class="container">
                    <div class="row px-4">
                        <div class="kiri col-lg-5 d-flex align-items-start justify-content-center h-md-50 flex-column pt-5">
                            <h1 class="hero-title text-start txt-dark" data-aos="fade-up" data-aos-delay="100"><?= $judul_hero ?></h1>
                            <h1 class="pasundan hero-title text-start txt-main" data-aos="fade-up" data-aos-delay="150">
                                <span class="teg"><?= $judul_hero1 ?></span> <?= $judul_hero2 ?>
                            </h1>
                            <p class="mt-4 col-lg-10 text-start" data-aos="fade-up" data-aos-delay="250">
                                <?= $subjudul_hero?>
                            </p>
                            <div class="tmbol mt-4" data-aos="fade-up" data-aos-delay="300">
                                <!-- gunakan routing internal -->
                                <a href="/kesiswaan/ekskul" class="btn btn-main mx-2 mt-3 ms-0">Kegiatan Siswa</a>
                                <a href="/informasi/artikel" class="btn btn-second mx-2 mt-3 ms-0 btn-sc-hero">Info Pendaftaran</a>
                            </div>
                        </div>

                        <div class="kanan col-lg-7 d-flex align-items-center justify-content-center flex-column hp-hidden">
                            <div class="gambar-container col-12">
                                <img src="<?= $gambar_hero ?>" class="img-fluid gambar-patok pt-5" data-aos="fade-up" data-aos-delay="100" />
                                <div class="posisi1 bg-glases" data-aos="fade-up" data-aos-delay="200">
                                    <div class="col-12 bg-light p-3 rounded">
                                        <p class="fw-semibold mb-1">
                                            <span class="teg">Berkarakter</span>
                                        </p>
                                        <small class="text-muted">Berakhlak dan percaya diri</small>
                                    </div>
                                </div>
                                <div class="posisi2 bg-glases" data-aos="fade-up" data-aos-delay="200">
                                    <div class="col-12 bg-light p-3 rounded">
                                        <p class="fw-semibold mb-1">
                                            <span class="teg">Siap Kerja</span>
                                        </p>
                                        <small class="text-muted">Berkompeten di bidangnya</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HERO -->