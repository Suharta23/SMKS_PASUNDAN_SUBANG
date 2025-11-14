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