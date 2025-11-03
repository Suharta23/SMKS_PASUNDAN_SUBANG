

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets//js/aos.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.getElementById("mainNavbar");

            // Fungsi untuk mengubah navbar saat scroll
            function handleScroll() {
                if (window.scrollY > 50) { // Saat di-scroll lebih dari 50px
                    navbar.classList.add("navbar-scrolled", "navbar-light");
                    navbar.classList.remove("navbar-transparent", "navbar-dark");
                } else { // Saat di paling atas
                    navbar.classList.remove("navbar-scrolled", "navbar-light");
                    navbar.classList.add("navbar-transparent", "navbar-dark");
                }
            }

            // Panggil fungsi saat DOM dimuat (untuk cek posisi awal)
            handleScroll(); 
            
            // Panggil fungsi saat terjadi event scroll
            window.addEventListener("scroll", handleScroll);
        });
    </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Memastikan AOS diinisialisasi setelah DOM siap
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
        });
    });
</script>