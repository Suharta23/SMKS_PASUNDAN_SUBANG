
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

  // tumnil aktif
 function changeView(key, event) {
  event.preventDefault();
  const viewer = document.getElementById('tour-viewer-frame');
  const caption = document.getElementById('location-name-caption');
  const thumbnails = document.querySelectorAll('.tour-thumbnail');
  const loc = tourLocations[key];
  if (!loc) return;

  // Ubah iframe dan caption
  viewer.src = loc.url;
  caption.textContent = `Lokasi: ${loc.name}`;

  // Hapus kelas aktif dari semua thumbnail
  thumbnails.forEach(thumb => thumb.classList.remove('active-thumb'));

  // Tambahkan kelas aktif pada thumbnail yang diklik
  event.currentTarget.classList.add('active-thumb');
}

document.addEventListener('DOMContentLoaded', () => {
  // kode lain seperti tombol toggle...
  document.getElementById('location-name-caption').textContent = 'Lokasi: Gerbang Utama Sekolah';
});
