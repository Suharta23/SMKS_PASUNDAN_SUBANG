<?php
function layout1(
    $id = 'id',
    $judul = 'Isi Judul',
    $teks_awal = 'Isi teks pembukaan...',
    $kutipan = 'Isi kutipan...',
    $gambar = 'alamat-gambar',
    $alt = 'Isi alt gambar',
    $reverse = false,              // gambar bisa dibalik
    $komponen_tambahan = ''        // fleksibel: list, tombol, tabel, dll.
) {

    // Atur urutan kolom
    $text_col = "col-lg-6";
    $img_col  = "col-lg-6 d-flex justify-content-center";

    if ($reverse) {
        // Jika true → gambar di kiri, teks di kanan
        $text_col = "col-lg-6 order-lg-2";
        $img_col  = "col-lg-6 d-flex justify-content-center order-lg-1";
    }

    echo "
    <section id='$id' class='py-5'>
        <div class='container'>
            <div class='row g-5 align-items-center'>
                
                <div class='$text_col' data-aos='fade-right'>
                    <h2 class='txt-judul fw-bold mb-4'>$judul</h2>

                    <p class='lead text-muted txt-justify'>$teks_awal</p>

                    <blockquote class='blockquote border-start border-main-color border-4 ps-4 mb-4'>
                        <p class='text-muted fst-italic mb-0'>$kutipan</p>
                    </blockquote>

                    <!-- Komponen tambahan fleksibel -->
                    $komponen_tambahan
                </div>

                <div class='$img_col' data-aos='fade-left'>
                    <img src='$gambar' class='img-fluid rd-20 shadow-lg' alt='$alt'>
                </div>

            </div>
        </div>
    </section>
    ";
}
?>
