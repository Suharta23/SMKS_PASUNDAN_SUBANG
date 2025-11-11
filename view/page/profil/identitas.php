
    <section id="data-dasar" class="py-5">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul" data-aos="fade-up"><span class="teg">Data Pokok</span> & Legalitas</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                    Informasi resmi dan legalitas SMKS Pasundan Subang.
                </p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow border-0 rd-20" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body p-lg-5">
                            <h4 class="fw-bold mb-4 border-bottom pb-2">Informasi Sekolah</h4>
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <?php foreach ($data_sekolah as $item): ?>
                                        <tr>
                                            <th scope="row"><?= $item[0]; ?></th>
                                            <td><?= $item[1]; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <section id="filosofi" class="py-5 bg-light">
        <div class="container">
            <div class="text-center col-lg-8 mx-auto mb-5">
                <h2 class="txt-judul" data-aos="fade-up"><span class="teg">Filosofi</span> & Nilai Inti</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
                    <?= $filosofi['deskripsi']; ?>
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <blockquote class="blockquote bg-white p-5 shadow-lg rd-20 border-start border-4 border-primary" data-aos="zoom-in" data-aos-delay="200">
                        <p class="mb-3 fst-italic display-6 txt-dark">
                            <?= $filosofi['kutipan']; ?>
                        </p>
                        <footer class="blockquote-footer mt-4"><?= $filosofi['sumber']; ?></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>


    <?php 
        cta(
            $judul, 
            $deskripsi, 
            $link, 
            $btn, 
            $ikon
        );
    ?>
</main>
