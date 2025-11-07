
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
    


    document.addEventListener("DOMContentLoaded", function() {
        // Memastikan AOS diinisialisasi setelah DOM siap
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
        });
    });



    // Tunggu sampai semua konten halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        
        // Pilih elemen navbar Anda
        const navbar = document.querySelector('.navbar.fixed-top');

        // Tambahkan event listener untuk 'scroll'
        window.addEventListener('scroll', function() {
            
            // Cek jarak scroll dari atas
            // Anda bisa mengganti '50' (dalam pixel) sesuai kebutuhan
            if (window.scrollY > 50) { 
                // Jika sudah scroll lebih dari 50px, tambahkan kelas 'navbar-scrolled'
                navbar.classList.add('navbar-scrolled');
            } else {
                // Jika kembali ke atas, hapus kelas 'navbar-scrolled'
                navbar.classList.remove('navbar-scrolled');
            }
        });
    });



    // Fungsi untuk smooth scroll tanpa mengubah hash URL
    function smoothScroll(id) {
        document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
        return false; // Mencegah browser menambahkan '#' ke URL
    }
