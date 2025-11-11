
<main>

        <!-- bagian 1 -->

        <section class="py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 class="txt-judul"><?= $section_akar['judul']; ?></h2>
                        <p class="lead text-muted txt-justify"><?= $section_akar['paragraf1']; ?></p>
                        <p class="txt-justify"><?= $section_akar['paragraf2']; ?></p>
                        
                        <blockquote class="blockquote border-start border-primary border-4 ps-3 my-4">
                            <p class="mb-0 fst-italic"><?= $section_akar['kutipan']['isi']; ?></p>
                            <footer class="blockquote-footer mt-1">
                                <cite><?= $section_akar['kutipan']['sumber']; ?></cite>
                            </footer>
                        </blockquote>
                    </div>

                    <div class="col-lg-6 p-5 d-flex align-items-center justify-content-center position-relative dua-gambar" data-aos="fade-left">
                        <img src="<?= $section_akar['gambar']['baru']; ?>" class="img-fluid img-dua rd-20 img-baru-r">
                        <img src="<?= $section_akar['gambar']['lama']; ?>" class="img-fluid img-dua rd-20 img-lama-r">
                    </div>
                </div>
            </div>
        </section>

        <!-- bagian 1 end  -->

        <!-- bagian timeline -->

        <section class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="txt-judul" data-aos="fade-up"><span class="teg">Jejak Langkah</span> Kami</h2>
                    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                        Milestone penting dalam perjalanan SMKS Pasundan Subang.
                    </p>
                </div>

                <div class="timeline-wrapper">
                    <?php foreach ($timeline_data as $index => $item): ?>
                        <div class="timeline-item" data-aos="fade-up">
                            <div class="timeline-icon" 
                                 style="<?= isset($item['color']) ? 'background-color:'.$item['color'].';' : ''; ?>">
                                <i class="bi <?= $item['icon']; ?> text-light"></i>
                            </div>

                            <div class="timeline-content">
                                <div class="year" data-aos="fade-up" data-aos-delay="100"><?= $item['year']; ?></div>
                                <div class="title" data-aos="fade-up" data-aos-delay="200"><?= $item['title']; ?></div>
                                <p class="text-muted" data-aos="fade-up" data-aos-delay="300"><?= $item['desc']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- bagian timeline end  -->

        <!-- kisah virtual  -->
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
         <!-- kisah virtual end  -->

          

</main>
