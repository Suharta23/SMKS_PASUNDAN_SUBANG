<?php
function tbl($link = '/ppdb', $text = 'Daftar PPDB Sekarang', $bg = 'bg-light', $aos_delay = 900, $btn='btn-main') {
    return "
    <div class='text-center py-5 $bg'>
        <a href='$link' class='btn $btn btn-lg' data-aos='fade-up' data-aos-delay='$aos_delay'>$text</a>
    </div>
    ";
}
?>
