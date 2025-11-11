<?php
function cta(
    $judul, 
    $deskripsi, 
    $link, 
    $teks_tombol, 
    $ikon = "bi bi-telephone-fill", 
    $bg="bg-main",
    ) {
    ?>
    <!-- SECTION CTA -->
    <section class="py-5 <?= $bg ?> text-center" data-aos="fade-up">
        <div class="container py-4">
            <div class="col-lg-9 mx-auto">
                <h2 class="txt-judul 
                 <?php if ($bg=="bg-main" || $bg=="bg-second"): ?>
                         text-light
                     <?php else: ?>
                         txt-dark
                    <?php endif ?>

                " data-aos="fade-up" data-aos-delay="100">
                    <?= $judul ?>
                </h2>
                <p class="lead mb-4 
                    <?php if ($bg=="bg-main" || $bg=="bg-second"): ?>
                         text-light
                     <?php else: ?>
                         txt-dark
                    <?php endif ?>
                " data-aos="fade-up" data-aos-delay="300">
                    <?= $deskripsi ?>
                </p>
                <a href="<?= $link ?>" class="btn 
                    <?php if ($bg=="bg-main"): ?>
                         btn-lig
                     <?php else: ?>
                         btn-main
                    <?php endif ?>
                    btn-lg px-5 py-3" data-aos="zoom-in" data-aos-delay="300">    
                    <i class="bi <?= $ikon ?> 
                    <?php if ($bg!="bg-main"): ?>
                        text-light
                    <?php endif ?>
                     me-2"></i> <?= $teks_tombol ?>
                </a>
            </div>
        </div>
    </section>
    <!-- END SECTION CTA -->
    <?php
}

?>