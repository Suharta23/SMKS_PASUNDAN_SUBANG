

    <?php 

        tampilkanTahapan(
            $judul,
            $subjudul,
            $bg,
            $isi
        );

     ?>

    <section id="struktur" class="py-5 <?= $judul_struktur['bg'] ?>">
    <div class="container">
        <div class="row g-5 align-items-center">
            
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="txt-judul fw-bold mb-4"><?= $judul_struktur['judul'] ?></h2>
                <p class="lead text-muted"><?= $judul_struktur['deskripsi'] ?></p>
                
                <div class="table-responsive shadow rd-10" data-aos="fade-up" data-aos-delay="100">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="bg-main text-white">
                            <tr>
                                <th scope="col">Komponen</th>
                                <th scope="col">Fokus</th>
                                <th scope="col">Alokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($struktur_kurikulum as $index => $item): ?>
                                <tr data-aos="fade-right" data-aos-delay="<?= 200 + ($index * 100) ?>">
                                    <td class="fw-bold"><?= $item['komponen'] ?></td>
                                    <td><?= $item['fokus'] ?></td>
                                    <td><?= $item['alokasi'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-6 d-flex justify-content-center order-lg-2" data-aos="fade-left">
                <img src="<?= $judul_struktur['gambar'] ?>" class="img-fluid rd-20 shadow-lg" alt="Infografis struktur kurikulum">
            </div>

        </div>
    </div>
</section>


 <?php 

    card_2(
        "Lihat Kurikulum <span class='teg'>Per Kompetensi Keahlian</span>",
        "Jelajahi detail mata pelajaran, prospek karir, dan fasilitas yang disinkronkan dengan standar industri modern.",
        "bg-light",
        $jurusan_list,
        4 // jumlah kolom per baris
    );

    echo tbl('/daftar', 'Daftar Sekarang!', 'bg-light',);

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