<?php include "view/layout/head.php" ?>
<body style="position: relative;" data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="100">
    <?php  ?>

    <?php 
        

        if (isset($page)) {
            if (isset($file)) {
                $tpl = __DIR__ . "/page/$page/$file.php";
            } else {
                $tpl = __DIR__ . "/page/$page/$page.php";
            }

            if (file_exists($tpl)) {
                if($page!="tour"){

                     include "controller/page.php";

                    if ($page=="beranda") {

                        include "view/layout/navbar.php";
                        include $tpl;
                        include "view/layout/footer.php";

                    }else{

                        include "view/layout/navbar.php";
                        include "view/layout/hero.php";
                        include $tpl;
                        include "view/layout/footer.php";
                        
                    }
                    
                }else{
                     include $tpl;
                }
               
            } else {
                include __DIR__ . "/page/404/404.php";
            }
        }


    ?>

    <?php  ?>

    <?php include "view/layout/foot.php" ?>
 

    <!-- COPYRIGHT INFO: Tambahan copyright di footer -->
    <!-- <footer class="text-center py-3 bg-dark text-white">
        <small>&copy; 2025 Suharta. All Rights Reserved.</small>
    </footer> -->

    <!-- 
    Penjelasan Web dan Cara Penggunaan:
    - Website ini merupakan situs resmi SMKS Pasundan Subang sebagai pusat informasi pendidikan vokasi.
    - Pengguna dapat menavigasi menu untuk melihat informasi sekolah, program, jurusan, mitra industri, berita, dan kontak.
    - Tombol pada setiap section mengarahkan ke halaman detail untuk informasi lebih lengkap.
    - Pastikan untuk mengeksplorasi bagian Link & Match untuk peluang kerja sama industri.
    - Jika membutuhkan bantuan memilih jurusan, dapat menghubungi tim Bimbingan Konseling melalui tombol "Hubungi Kami Sekarang".
    - Website ini responsif, dapat diakses di perangkat desktop maupun mobile.
    -->
</body>
</html>
