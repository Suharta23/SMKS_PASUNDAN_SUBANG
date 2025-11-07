<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Virtual Tour (Model Ilustrasi)</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>

<body>

<main>
  <section id="virtual-tour-viewer" class="p-0">
    <div id="viewer-container">
      <iframe 
        id="tour-viewer-frame"
        src="https://www.google.com/maps/embed?pb=!4v1762486703546!6m8!1m7!1sK-0aV25PTXQvz9EaGWLXXA!2m2!1d-6.553170033959693!2d107.7612190856131!3f259.1568458402864!4f8.056432264778408!5f0.7820865974627469"
        allowfullscreen
        title="Virtual Tour"
      ></iframe>
    </div>
  </section>

  <section id="tour-navigation">
    <div id="thumbnail-list-wrapper" class="py-2">
      <div class="container-fluid">
        <div id="thumbnail-list" class="d-flex">
          <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('gedung_utama', event)">
            <img src="assets/img/tour/gerbang.png" alt="Gerbang Utama">
            <p>Gerbang</p>
          </a>
          <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('loby', event)">
            <img src="assets/img/tour/loby.png" alt="Loby Sekolah">
            <p>Loby</p>
          </a>
          <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('Lapangan', event)">
            <img src="assets/img/tour/lapangan.png" alt="Lapangan">
            <p>Lapangan</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('ruang_kelas', event)">
            <img src="assets/img/tour/kelas.png" alt="Ruangan Kelas">
            <p>Ruang Kelas</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('koperasi', event)">
            <img src="assets/img/tour/koperasi.png" alt="Koperasi Siswa">
            <p>Koperasi Siswa</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('lab_hotel', event)">
            <img src="assets/img/tour/lab_hotel.png" alt="Lab Perhotelan">
            <p>Lab Perhotelan</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('lab_kitcen', event)">
            <img src="assets/img/tour/lab_kitcen.png" alt="Lapangan">
            <p>Lab Kitcen Perhotelan</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('perpus', event)">
            <img src="assets/img/tour/perpus.png" alt="Perpustakaan">
            <p>Perpustakaan</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('bank_mini', event)">
            <img src="assets/img/tour/bank_mini.png" alt="Bank Mini Pasundan">
            <p>Bank Mini Pasundan</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('masjid', event)">
            <img src="assets/img/tour/masjid.png" alt="Masjid Pasundan">
            <p>Masjid Pasundan</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('lab_tkr', event)">
            <img src="assets/img/tour/lab_tkr.png" alt="LAB TKRO">
            <p>LAB TKRO</p>
          </a>
          <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('lab_rpl', event)">
            <img src="assets/img/tour/lab_rpl.png" alt="LAB RPL/PPLG">
            <p>LAB RPL/PPLG</p>
          </a>
          <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('lab_ak', event)">
            <img src="assets/img/tour/lab_ak.png" alt="LAB Akuntansi">
            <p>LAB Akuntansi</p>
          </a>
          <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('lab_mp', event)">
            <img src="assets/img/tour/lab_mp.png" alt="LAB Manajemen Perkantoran">
            <p>LAB MP</p>
          </a>
           <a href="#" class="tour-thumbnail mx-2 text-decoration-none" onclick="changeView('lab_tkj', event)">
            <img src="assets/img/tour/lab_tkj.png" alt="LAB TKJ/TJKT">
            <p>LAB TKJ/TJKT</p>
          </a>
        </div>
      </div>
      <button class="scroll-btn" id="scroll-left"><i class="bi bi-chevron-left"></i></button>
      <button class="scroll-btn" id="scroll-right"><i class="bi bi-chevron-right"></i></button>
    </div>

    <div id="bottom-bar" class="d-flex justify-content-between align-items-center px-3">
      <figcaption id="location-name-caption">Lokasi: Gerbang Utama Sekolah</figcaption>
      <button id="toggle-nav-btn" title="Tampilkan/Sembunyikan Navigasi">
        <i class="bi bi-chevron-down" id="toggle-icon"></i>
      </button>
    </div>
  </section>
</main>

<script>
  const tourLocations = {
    'gedung_utama': {
      name: 'Gerbang Utama Sekolah',
      url: 'https://www.google.com/maps/embed?pb=!4v1762486703546!6m8!1m7!1sK-0aV25PTXQvz9EaGWLXXA!2m2!1d-6.553170033959693!2d107.7612190856131!3f259.1568458402864!4f8.056432264778408!5f0.7820865974627469'
    },
    'loby': {
      name: 'Loby SMKS Pasundan Subang',
      url: 'https://www.google.com/maps/embed?pb=!4v1762489686308!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQzFrNy04SFE.!2m2!1d-6.553168187797605!2d107.761059329326!3f214.49008878233187!4f-3.299310212006503!5f0.7820865974627469'
    },
    'Lapangan': {
      name: 'Lapangan SMKS Pasundan Subang',
      url: 'https://www.google.com/maps/embed?pb=!4v1762491822767!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQzFrNy1xN1FF!2m2!1d-6.553083527670759!2d107.7609149342981!3f12.935334760236243!4f-8.159314889206229!5f0.7820865974627469'
    },
    'ruang_kelas': {
        name: 'Ruang Kelas Smart',
        url: 'https://www.google.com/maps/embed?pb=!4v1762494843147!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQzEwNURjLUFF!2m2!1d-6.553217745810233!2d107.7608680375559!3f170.0894833829662!4f-10.569871313361489!5f0.7820865974627469'        },
    'koperasi': {
        name: 'Kantin dan Koperasi Siswa',
        url: 'https://www.google.com/maps/embed?pb=!4v1762498015873!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQzEwOENWUkE.!2m2!1d-6.55316348783126!2d107.761003938734!3f178.60609346195653!4f-16.824404285796987!5f0.7820865974627469' 
    },
    'lab_hotel': {
        name: 'Lab Perhotelan',
        url: 'https://www.google.com/maps/embed?pb=!4v1762498791093!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQzEwOER3b1FF!2m2!1d-6.552970914597384!2d107.7608031592239!3f317.4089930931504!4f-8.152824241601706!5f0.4000000000000002' 
    },
    'lab_kitcen': {
        name: 'Lab Perhotelan Kitcen',
        url: 'https://www.google.com/maps/embed?pb=!4v1762499754423!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQzFrXy1YNHdF!2m2!1d-6.553066402970188!2d107.7607503891153!3f331.45157530909097!4f-10.514607430456252!5f0.7820865974627469' 
    },
     'perpus': {
        name: 'Ruang Perpustakaan',
        url: 'https://www.google.com/maps/embed?pb=!4v1762519976934!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQzFrOV9PTXc.!2m2!1d-6.552925680581253!2d107.7608796939708!3f347.151516206868!4f-8.435852998889843!5f0.7820865974627469' 
    },
     'bank_mini': {
        name: 'Bank Mini Pasundan',
        url: 'https://www.google.com/maps/embed?pb=!4v1762520245880!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQzEwNkQ1TVE.!2m2!1d-6.553257832937017!2d107.7609676140776!3f181.97465885669396!4f-15.130107333401014!5f0.7820865974627469' 
    },
        'masjid': {
        name: 'Masjid Pasundan',
        url: 'https://www.google.com/maps/embed?pb=!4v1762549062003!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQzFrN19VeWdF!2m2!1d-6.552750477197262!2d107.7609205366069!3f301.8156965810375!4f-6.402466261224475!5f0.4000000000000002' 
    },
         'lab_tkr': {
        name: 'Lab Teknik Kendaraan Ringan',
        url: 'https://www.google.com/maps/embed?pb=!4v1762549377818!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQzFrN196Ymc.!2m2!1d-6.553455375128051!2d107.7609434880024!3f322.1911877517739!4f-0.06471950309112628!5f0.7820865974627469' 
    },
         'lab_rpl': {
        name: 'Lab Rekayasa Perangkat Lunak',
        url: 'https://www.google.com/maps/embed?pb=!4v1762549734880!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQzEwNkN2MHdF!2m2!1d-6.55292634523429!2d107.76106339552!3f162.56540068873184!4f-3.6837220376801127!5f0.7820865974627469' 
    },
         'lab_ak': {
        name: 'Lab Akuntansi',
        url: 'https://www.google.com/maps/embed?pb=!4v1762550030042!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQzEwNUNGUWc.!2m2!1d-6.553312431608534!2d107.7607557203416!3f158.51569039539592!4f-1.538370427260432!5f0.7820865974627469' 
    },
         'lab_mp': {
        name: 'Lab Manajemen Perkantoran',
        url: 'https://www.google.com/maps/embed?pb=!4v1762550252821!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQzEwLURQWHc.!2m2!1d-6.553197746557591!2d107.7607332207602!3f153.1970329768522!4f-11.176206519435894!5f0.7820865974627469' 
    },
         'lab_tkj': {
        name: 'Lab Teknik Komputer dan Jaringan',
        url: 'https://www.google.com/maps/embed?pb=!4v1762550600683!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQzEwLURHNHdF!2m2!1d-6.55287553096008!2d107.7611410146561!3f83.38769350186125!4f-3.2857391495043515!5f0.7820865974627469' 
    }
  };

  function changeView(key, event) {
    event.preventDefault();
    const viewer = document.getElementById('tour-viewer-frame');
    const caption = document.getElementById('location-name-caption');
    const thumbnails = document.querySelectorAll('.tour-thumbnail');
    const loc = tourLocations[key];
    if (!loc) return;

    viewer.src = loc.url;
    caption.textContent = `Lokasi: ${loc.name}`;

    thumbnails.forEach(thumb => {
      thumb.querySelector('img').classList.remove('border-main-color', 'border-3', 'border');
      thumb.querySelector('p').classList.remove('fw-bold');
    });

    event.currentTarget.querySelector('img').classList.add('border-main-color', 'border-3', 'border');
    event.currentTarget.querySelector('p').classList.add('fw-bold');
  }

  document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('toggle-nav-btn');
    const icon = document.getElementById('toggle-icon');
    const thumbnailWrapper = document.getElementById('thumbnail-list-wrapper');
    const viewerFrame = document.getElementById('tour-viewer-frame');
    const scrollLeftBtn = document.getElementById('scroll-left');
    const scrollRightBtn = document.getElementById('scroll-right');
    const list = document.getElementById('thumbnail-list');
    const scrollAmount = 150;

    function updateIframeHeight() {
      // Hanya aktif di HP / tablet
      if (window.innerWidth <= 992) {
        const navHeight = document.getElementById('tour-navigation').offsetHeight;
        viewerFrame.style.height = `calc(100vh - ${navHeight}px)`;
      } else {
        viewerFrame.style.height = '100vh';
      }
    }

    btn.addEventListener('click', () => {
      thumbnailWrapper.classList.toggle('hidden');
      icon.classList.toggle('bi-chevron-down');
      icon.classList.toggle('bi-chevron-up');
      setTimeout(updateIframeHeight, 350); // Sesuaikan setelah animasi selesai
    });

    scrollLeftBtn.addEventListener('click', () => list.scrollLeft -= scrollAmount);
    scrollRightBtn.addEventListener('click', () => list.scrollLeft += scrollAmount);

    window.addEventListener('resize', updateIframeHeight);
    updateIframeHeight(); // Jalankan saat awal
  });
</script>

</body>
</html>
