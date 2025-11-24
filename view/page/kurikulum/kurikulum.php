
    <?php 

        tampilkanTahapan(
            $judulcard,
            $subjudul,
            $bg,
            $isi
        );

     ?>

<?php 
    
    layout1(
        $id,
        $judul,
        $teks_awal,
        $kutipan,
        $gambar,
        $alt,
        $reverse,
        $tabel
    );

 ?>
   
 <?php 

    card_2(
        $jurusan_judul,
        $subjurusan_judul,
        $jurusan_bg,
        $jurusan_list,
        4 // jumlah kolom per baris
    );

    tbl('/daftar', 'Daftar PPDB Sekarang!', 'bg-light', 500);

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