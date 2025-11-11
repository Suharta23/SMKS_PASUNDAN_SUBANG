
<!-- SECTION MITRA INDUSTRI -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center col-lg-8 mx-auto mb-5">
            <h6 class="ttg-judul" data-aos="fade-up"><?= $mitra_industri['judul']['sub'] ?></h6>
            <h2 class="txt-judul" data-aos="fade-up" data-aos-delay="100">
                <?= $mitra_industri['judul']['utama'] ?>
            </h2>
            <p class="lead text-muted" data-aos="fade-up" data-aos-delay="200">
                <?= $mitra_industri['judul']['deskripsi'] ?>
            </p>
        </div>

        <div class="logo-carousel" data-aos="fade-up" data-aos-delay="300">
            <div class="partner-logo">
                <?php foreach ($mitra_industri['logo'] as $logo): ?>
                    <img src="<?= $logo['src'] ?>" class="lgo-mitra" alt="<?= $logo['alt'] ?>" />
                <?php endforeach; ?>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= $mitra_industri['tombol']['url'] ?>" 
               class="btn btn-main btn-lg px-5 py-3" 
               data-aos="zoom-in" data-aos-delay="400">
                <i class="<?= $mitra_industri['tombol']['ikon'] ?> me-2 text-white"></i>
                <?= $mitra_industri['tombol']['teks'] ?>
            </a>
        </div>
    </div>
</section>
<!-- END SECTION MITRA INDUSTRI -->
