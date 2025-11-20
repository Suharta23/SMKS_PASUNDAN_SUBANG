<?php
function card_2($judul, $deskripsi, $bg, $data_list, $col = 4)
{
    // Tentukan ukuran kolom otomatis (Bootstrap grid 12 kolom)
    $col_class = match ($col) {
        2 => "col-12 col-md-6 col-lg-6",
        3 => "col-12 col-md-4 col-lg-4",
        4 => "col-6 col-md-4 col-lg-3",
        6 => "col-6 col-md-2 col-lg-2",
        default => "col-6 col-md-4 col-lg-3", // default 4 kolom
    };
    ?>

    <section class="py-5 <?= $bg ?>">
        <div class="container">
            <div class="text-center col-lg-10 mx-auto mb-5" data-aos="fade-up">
                <h2 class="txt-judul fw-bold mb-3"><?= $judul ?></h2>
                <p class="lead text-muted"><?= $deskripsi ?></p>
            </div>

            <div class="row justify-content-center g-4">
                <?php foreach ($data_list as $index => $item): ?>
                    <div class="<?= $col_class ?>" data-aos="zoom-in" data-aos-delay="<?= 100 + ($index * 100) ?>">
                        <div class="card h-100 p-3 shadow-sm border-0 text-center rd-10 bg-white">
                            <div class="py-3">
                                <i class="bi <?= $item['icon'] ?> fs-1 txt-<?= $item['warna'] ?>"></i>
                            </div>
                            <h5 class="fw-bold mb-1 txt-<?= $item['warna'] ?>"><?= $item['judul'] ?></h5>
                            <p class="small text-dark mb-3"><?= $item['deskripsi'] ?></p>
                            <?php if (!empty($item['link'])): ?>
                                <a href="<?= $item['link'] ?>" class="btn btn-outline-<?= $item['warna'] ?> btn-sm fw-bold">
                                    <?= $item['btn'] ?> &rarr;
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php
}
?>
