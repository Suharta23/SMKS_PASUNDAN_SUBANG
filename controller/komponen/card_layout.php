<?php
function tampilkanTahapan($judul, $deskripsi, $bg = 'bg-light', $tahapan = [])
{
    // Jika tidak dikirim, buat data default
    if (empty($tahapan)) {
        $tahapan = [
            [
                'icon' => 'bi-emoji-smile-fill',
                'warna' => 'bg-main',
                'judul' => 'Isi ini dengan array',
                'teks' => 'Isilah ini dengan data dari array yang bisa di custom, judul, deskripsi, bg, icon, bg-icon, judul card, dan teks card'
            ]
        ];
    }
?>
    <section id="tahapan" class="py-5 <?= $bg ?>">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul fw-bold" data-aos="fade-up">
                    <?= htmlspecialchars($judul) ?>
                </h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                    <?= htmlspecialchars($deskripsi) ?>
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <?php foreach ($tahapan as $i => $t): ?>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?= 200 + ($i * 100) ?>">
                        <div class="card p-4 shadow-lg h-100 border-0 bg-white rd-10 text-center">
                            <div class="p-3 mb-3 mx-auto <?= $t['warna'] ?> text-white rd-50 d-inline-block shadow rounded">
                                <i class="bi <?= $t['icon'] ?> fs-3 text-white"></i>
                            </div>
                            <h4 class="fw-bold <?= $t['warna'] == 'bg-main' ? 'txt-main' : 'txt-second' ?>">
                                <?= htmlspecialchars($t['judul']) ?>
                            </h4>
                            <p class="text-muted small"><?= htmlspecialchars($t['teks']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php
}
?>
