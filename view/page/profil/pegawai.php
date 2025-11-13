

    <?php 

        tampilkanTahapan(
            $judul,
            $subjudul,
            $bg,
            $isi
        );

     ?>
    
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

    
    <section id="tim-inti" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">Kenali Lebih Dekat <span class="teg">Tim Kami</span></h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                    Para individu bersemangat yang membentuk lingkungan belajar yang dinamis dan mendukung.
                </p>
            </div>

            <!-- Tab Navigasi -->
            <ul class="nav nav-tabs nav-fill flex-wrap mb-5" id="staffTabs" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <?php 
                $isFirst = true;
                foreach ($kategoriList as $key => $label): 
                ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?= $isFirst ? 'active' : '' ?>" id="<?= $key ?>-tab"
                                data-bs-toggle="tab" data-bs-target="#<?= $key ?>" type="button" role="tab">
                            <?= $label ?>
                        </button>
                    </li>
                <?php 
                $isFirst = false;
                endforeach; 
                ?>
            </ul>

            <!-- Konten Tab -->
            <div class="tab-content" id="staffTabsContent">
                <?php 
                $isFirst = true;
                foreach ($kategoriList as $key => $label): 
                    // Filter anggota berdasarkan kategori
                    $anggotaKategori = array_filter($tim, fn($t) => $t['kategori'] === $key);
                ?>
                    <div class="tab-pane fade <?= $isFirst ? 'show active' : '' ?>" id="<?= $key ?>" role="tabpanel">
                        <div class="row g-4 justify-content-center">
                            <?php if (empty($anggotaKategori)): ?>
                                <p class="text-center text-muted py-5" data-aos="fade-up">Belum ada data untuk kategori ini.</p>
                            <?php else: ?>
                                <?php foreach ($anggotaKategori as $index => $orang): ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                                        <div class="card profile-card-upgrade">
                                            <img src="assets/img/pegawai/bg.jpg" class="card-img-top" alt="latar">
                                            <div class="card-body">
                                                <div class="profile-image-overlay-upgrade">
                                                    <img src="<?= $orang['foto'] ?>" alt="Foto <?= $orang['nama'] ?>">
                                                </div>
                                                <h5 class="card-title"><?= $orang['nama'] ?></h5>
                                                <p class="card-subtitle mb-2 txt-main"><?= $orang['jabatan'] ?></p>
                                                <?php if (!empty($orang['sosmed'])): ?>
                                                    <div class="social-icons-upgrade">
                                                        <?php foreach ($orang['sosmed'] as $s): ?>
                                                            <a href="#"><i class="bi bi-<?= $s ?>"></i></a>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php 
                $isFirst = false;
                endforeach; 
                ?>
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
