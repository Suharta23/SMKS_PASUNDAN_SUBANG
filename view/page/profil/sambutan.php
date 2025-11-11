

    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- foto -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm sticky-profile rd-20" data-aos="fade-up">
                        <img src="assets/img/pegawai/pa nano.png" class="card-img-top rd-20" alt="Foto Kepala Sekolah" style="object-fit: cover;">
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold mb-1 txt-dark"><?= $kepsek ?></h4>
                            <p class="card-text txt-main">Kepala SMKS Pasundan Subang</p>
                            <hr>
                            <p class="small text-muted fst-italic">"Pendidikan vokasi adalah kunci untuk membuka pintu emas kebebasan ekonomi dan profesionalisme."</p>
                            <div class="mt-3">
                                <a href="mailto:info@namasekolah.sch.id" class="btn btn-outline-primary btn-sm mx-1" title="Email Kepala Sekolah"><i class="bi bi-envelope-fill"></i> Email</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm mx-1" title="Profil LinkedIn"><i class="bi bi-linkedin"></i> LinkedIn</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- foto end -->

                <!-- sambutan -->
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="fw-bold mb-3 txt-judul"><span class="teg"><?= $j1_sambutan ?></span> <?= $j2_sambutan ?></h2>
                    
                    <p class="lead text-muted"><b>Assalamu'alaikum Warahmatullahi Wabarakatuh,</b> dan salam sejahtera bagi kita semua.</p>
                    
                    <?= $p1 ?>

                    <?= $p2 ?>
                    
                    <blockquote class="blockquote border-start border-main-color border-4 ps-3 my-4 bg-light p-3 rd-10">
                        <p class="mb-0 fst-italic">"<?= $qt ?>"</p>
                    </blockquote>

                    <?= $p3 ?>

                    <p class="mt-4 mb-0">Wassalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                    
                    <div class="mt-4">
                        <h5 class="fw-bold mb-0 mt-2 txt-main"><?= $kepsek ?></h5>
                        <p class="text-muted">Kepala SMKS Pasundan Subang</p>
                    </div>
                </div>

                <!-- Sambutan end -->

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
            $bg,
        );
    ?>
