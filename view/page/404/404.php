<main>
    <section class="py-5 text-center" style="height: 100vh; padding-top: 100px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    
                    <div class="img mb-4" data-aos="fade-up">
                        <img src="assets/img/404/404.png" class="img-fluid" style="max-height: 40vh;">
                    </div>
                    
                    <h2 class="txt-judul fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">
                        Halaman <span class="teg">Tidak Ditemukan</span>
                    </h2>
                    
                    <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="200">
                        Mohon maaf, halaman yang Anda cari (URL: <strong><?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?></strong>) tidak ada di server kami.
                    </p>
                    
                    <p class="text-muted mb-5" data-aos="fade-up" data-aos-delay="300">
                        Kemungkinan tautan yang Anda akses sudah tidak berlaku, terjadi kesalahan ketik, atau halaman sedang dalam proses pembaruan.
                    </p>

                    <div data-aos="fade-up" data-aos-delay="400">
                        <a href="/beranda" class="btn btn-main btn-lg m-3">
                           <i class="bi bi-house-up text-light"></i>  Kembali ke Beranda
                        </a>
                        
                        <a href="/kontak" class="btn btn-second btn-lg m-3">
                            <i class="bi bi-telephone-outbound text-light"></i> Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>