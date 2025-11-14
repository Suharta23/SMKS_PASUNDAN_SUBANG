<?php
function layout1(
    $id = 'id',
    $judul = 'Isi Judul',
    $highlight = 'Height light',
    $teks_awal = 'panjang',
    $kutipan = 'kutipan',
    $judul_list="Judul List",
    $dasar = [
        'list1',
        'list2',
        'list3'
    ],
    $gambar = 'alamat gambar',
    $alt = 'Isi altnya'
) {
    // buat daftar dasar pelaksanaan
    $list = '';
    foreach ($dasar as $item) {
        $list .= "<li class='mb-2'><i class='bi bi-check-circle-fill txt-main me-2'></i> $item</li>";
    }

    echo "
    <section id='$id' class='py-5'>
        <div class='container'>
            <div class='row g-5 align-items-center'>
                <div class='col-lg-6' data-aos='fade-right'>
                    <h2 class='txt-judul fw-bold mb-4'>$judul <span class='teg'>$highlight</span></h2>
                    <p class='lead text-muted txt-justify'>$teks_awal</p>
                    <blockquote class='blockquote border-start border-main-color border-4 ps-4 mb-4'>
                        <p class='text-muted fst-italic mb-0'>$kutipan</p>
                    </blockquote>
                    <h4 class='fw-bold txt-main mt-4'>Dasar Pelaksanaan:</h4>
                    <ul class='list-unstyled mt-3 fs-5'>
                        $list
                    </ul>
                </div>
                <div class='col-lg-6 d-flex justify-content-center' data-aos='fade-left'>
                    <img src='$gambar' class='img-fluid rd-20 shadow-lg' alt='$alt'>
                </div>
            </div>
        </div>
    </section>
    ";
}
?>
