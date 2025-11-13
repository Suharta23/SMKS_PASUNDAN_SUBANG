
<main>



<section id="<?= $pengantar['id']; ?>" class="<?= $pengantar['bg']; ?>">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="txt-judul fw-bold mb-4"><?= $pengantar['title']; ?></h2>
                <p class="lead text-muted"><?= $pengantar['lead']; ?></p>
                <p class="text-muted"><?= $pengantar['desc']; ?></p>

                <?php foreach ($pengantar['buttons'] as $btn): ?>
                    <a href="#" onclick="return smoothScroll('<?= $btn['target']; ?>')" 
                       class="btn btn-main btn-lg mt-3 me-2">
                        <?= $btn['text']; ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-left">
                <img src="<?= $pengantar['image']['src']; ?>" 
                     class="img-fluid rd-20 shadow-lg" 
                     alt="<?= $pengantar['image']['alt']; ?>">
            </div>
        </div>
    </div>
</section>


<section id="<?= $galeri_foto['id']; ?>" class="<?= $galeri_foto['bg']; ?>">
    <div class="container">
        <!-- Judul -->
        <div class="text-center col-lg-8 mx-auto mb-5">
            <h2 class="txt-judul fw-bold" data-aos="fade-up">
                <?= $galeri_foto['title']; ?>
            </h2>
            <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                <?= $galeri_foto['desc']; ?>
            </p>
        </div>

        <!-- Kategori -->
        <div class="text-center mb-4" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($galeri_foto['categories'] as $cat): ?>
                <button class="btn btn-sm btn-outline-secondary <?= $cat['active'] ? 'active' : '' ?> me-2 mb-2">
                    <?= $cat['label']; ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Galeri Foto -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($galeri_foto['items'] as $item): ?>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?= $item['delay']; ?>">
                    <a href="<?= $item['src']; ?>" data-lightbox="galeri" data-title="<?= $item['title']; ?>">
                        <img src="<?= $item['src']; ?>" 
                             class="img-fluid rd-10 shadow-sm hover-grow" 
                             alt="<?= $item['alt']; ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Tombol Lainnya -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="800">
            <a href="<?= $galeri_foto['button']['link']; ?>" class="btn btn-main btn-lg">
                <?= $galeri_foto['button']['text']; ?>
            </a>
        </div>
    </div>
</section>

<section id="<?= $galeri_video['id']; ?>" class="<?= $galeri_video['bg']; ?>">
    <div class="container">
        <!-- Judul -->
        <div class="text-center col-lg-8 mx-auto mb-5">
            <h2 class="txt-judul fw-bold" data-aos="fade-up">
                <?= $galeri_video['title']; ?>
            </h2>
            <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                <?= $galeri_video['desc']; ?>
            </p>
        </div>

        <!-- Video List -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($galeri_video['items'] as $v): ?>
                <div class="col-lg-6" data-aos="<?= $v['anim']; ?>" data-aos-delay="<?= $v['delay']; ?>">
                    <h5 class="fw-bold mb-3"><?= $v['judul']; ?></h5>
                    <div class="embed-responsive embed-responsive-16by9 ratio ratio-16x9 shadow-lg rd-10">
                        <iframe src="<?= $v['src']; ?>" 
                                title="<?= htmlspecialchars($v['judul']); ?>" 
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Tombol -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
            <a href="<?= $galeri_video['button']['link']; ?>" 
               target="<?= $galeri_video['button']['target']; ?>" 
               class="<?= $galeri_video['button']['class']; ?>">
               <?= $galeri_video['button']['text']; ?>
            </a>
        </div>
    </div>
</section>


        <?php 
        cta(
            $judul, 
            $deskripsi, 
            $link, 
            $btn_cta, 
            $ikon
        );
    ?>

</main>

