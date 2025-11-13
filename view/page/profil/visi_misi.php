
    <section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="txt-judul fw-bold" data-aos="fade-up">
                <i class="bi bi-lightbulb txt-main"></i> Visi <span class="teg">Kami</span>
            </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg rd-20 bg-light p-4 p-lg-5" data-aos="zoom-in" data-aos-delay="200">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-2 text-center text-md-start" data-aos="fade-right" data-aos-delay="300">
                            <i class="bi bi-lightbulb display-2 txt-main"></i>
                        </div>
                        <div class="col-md-10" data-aos="fade-left" data-aos-delay="400">
                            <blockquote class="blockquote mb-0 border-start border-primary border-4 ps-3">
                                <p class="fs-4 fst-italic mb-0 txt-dark">
                                    <strong class="text-uppercase">“<?= $visi ?>”</strong>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <h2 class="txt-judul fw-bold mb-4"><i class="bi bi-bullseye txt-main"></i> Misi <span class="teg">Kami</span></h2>
                    <p class="text-muted lead" data-aos="fade-up" data-aos-delay="100">Untuk mewujudkan visi tersebut, SMKS Pasundan Subang berkomitmen untuk:</p>
                    
                    <ul class="list-unstyled mt-4">
                         <?php 
                    $delay = 200;
                    foreach ($misi as $item): ?>
                            <li class="mb-4 d-flex align-items-start" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                                <i class="bi bi-check-circle-fill txt-main me-3 fs-4"></i>
                                <span class="txt-dark"><?= $item ?></span>
                            </li>
                        <?php 
                        $delay += 100;
                    endforeach; ?>
                    </ul>
                </div>
                
                <div class="col-lg-5 d-none d-lg-block" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/konten/visi-misi.png" class="img-fluid rounded-3 shadow-lg" alt="Siswa sedang belajar dengan teknologi">
                </div>
            </div>
        </div>
    </section>

    <?php 

        tampilkanTahapan(
            $judul_nilai,
            $subjudul,
            $bg,
            $isi
        );

     ?>
   

    <?php 
    cta(
        $judul, 
        $deskripsi, 
        $link, 
        $btn, 
        $ikon
    );
   ?>
