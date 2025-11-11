
 <!-- SECTION PROFIL -->
    <section id="profil" class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 p-5 d-flex align-items-center justify-content-center position-relative dua-gambar" data-aos="fade-right">
                    <img src="assets/img/konten/gedung-lama.png" class="img-fluid img-dua rd-20 img-lama" alt="Gedung Sekolah Lama" />
                    <img src="assets/img/konten/gedung-baru.png" class="img-fluid img-dua rd-20 img-baru" alt="Gedung Sekolah Baru" />
                </div>

                <div class="col-lg-6 ps-5" data-aos="fade-left">
                    <h6 class="ttg-judul"><?= $ttg_j_ttg_kami ?></h6>
                    <h2 class="txt-judul"><span class="teg"><?= $txt_j_ttg_kami1 ?></span> <?= $txt_j_ttg_kami2 ?></h2>
                   <p class="lead text-muted txt-justify">
                        <?= $profil["deskripsi"]["lead"] ?>
                    </p>
                    <p class="txt-justify">
                        <?= $profil["deskripsi"]["paragraf"] ?>
                    </p>

                    <ul class="list-unstyled mt-3 fs-5">
                        <?php foreach ($profil["keunggulan"] as $item): ?>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill txt-main me-2"></i> <?= $item ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="<?= $profil["link"]["url"] ?>" class="btn btn-main btn-lg px-5 py-3 mt-2">
                        <?= $profil["link"]["text"] ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PROFIL -->