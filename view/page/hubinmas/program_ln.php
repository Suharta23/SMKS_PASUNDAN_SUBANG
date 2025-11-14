<main>

    <?php 
    layout1(
        $id,
        $judul,
        $highlight,
        $teks_awal,
        $kutipan,
        $judul_list,
        $dasar,
        $gambar,
        $alt
    ); 
    ?>

    <?php 
    tampilkanTahapan(
        $judul_nilai,
        $subjudul,
        $bg,
        $isi
    );
    ?>

    <section id="syarat" class="py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h2 class="txt-judul fw-bold mb-4">Persyaratan Umum <span class="teg">Program PLN</span></h2>
                    <ul class="list-unstyled fs-5">
                        <?php foreach ($syarat_list as $syarat): ?>
                            <li class="mb-2"><i class="bi bi-check-circle-fill txt-main me-2"></i> <?= $syarat ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-5 text-center bg-second p-4 text-white rd-15 shadow-lg" data-aos="fade-left">
                    <h4 class="fw-bold mb-3 text-white">Siap Berkarir di Mancanegara?</h4>
                    <p class="mb-4 text-white">Hubungi Koordinator Hubinmas untuk informasi pendaftaran dan jadwal seleksi terbaru.</p>
                    <a href="kontak" class="btn btn-dark btn-lg px-4 py-3">
                        <i class="bi bi-whatsapp me-2"></i> Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>