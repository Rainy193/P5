
  (function ($) {
  
  "use strict";

    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });
    
    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      var header_height = $('.navbar').height();
  
      scrollToDiv(elWrapped,header_height);
      return false;
  
      function scrollToDiv(element,navheight){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-0;
  
        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });

    $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 30,
        autoplay: true,
        responsiveClass: true,
        responsive:{
            0:{
                items: 2,
            },
            767:{
                items: 3,
            },
            1200:{
                items: 4,
            }
        }
    });
  
  })(window.jQuery);


  
// Ambil semua elemen love dengan class 'love-icon'
const loveElements = document.querySelectorAll('.love-icon');

// Fungsi untuk menyimpan status love yang telah di-click ke localStorage
function saveLoveStatus(id, isFilled) {
    // Ambil data dari localStorage (atau inisialisasi sebagai object kosong jika tidak ada)
    let loveStatus = JSON.parse(localStorage.getItem('loveStatus')) || {};

    // Update status love berdasarkan id
    loveStatus[id] = isFilled;

    // Simpan kembali data ke localStorage
    localStorage.setItem('loveStatus', JSON.stringify(loveStatus));
}

// Fungsi untuk memuat status love dari localStorage saat halaman pertama kali dibuka
function loadLoveStatus() {
    // Ambil data dari localStorage
    const loveStatus = JSON.parse(localStorage.getItem('loveStatus')) || {};

    // Loop melalui semua love icon dan update berdasarkan status di localStorage
    loveElements.forEach(function(loveElement) {
        const id = loveElement.getAttribute('data-id');

        // Jika id ada di loveStatus dan statusnya true, ubah ikon menjadi filled
        if (loveStatus[id]) {
            loveElement.classList.remove('bi-heart');
            loveElement.classList.add('bi-heart-fill');
            loveElement.style.color = 'red';
        }
    });
}

// Muat status love dari localStorage ketika halaman pertama kali dibuka
loadLoveStatus();

// Loop melalui semua elemen love
loveElements.forEach(function(loveElement) {
    loveElement.addEventListener('click', function() {
        const id = loveElement.getAttribute('data-id'); // Ambil ID unik dari data-id

        // Cek apakah ikon sedang dalam keadaan 'fill' atau 'empty'
        if (loveElement.classList.contains('bi-heart')) {
            // Jika ikon kosong, ganti menjadi ikon penuh dan ubah warnanya
            loveElement.classList.remove('bi-heart');
            loveElement.classList.add('bi-heart-fill');
            loveElement.style.color = 'red';

            // Simpan status ke localStorage sebagai true (filled)
            saveLoveStatus(id, true);
        } else {
            // Jika ikon penuh, ganti kembali ke ikon kosong dan warna default
            loveElement.classList.remove('bi-heart-fill');
            loveElement.classList.add('bi-heart');
            loveElement.style.color = '';

            // Simpan status ke localStorage sebagai false (empty)
            saveLoveStatus(id, false);
        }
    });
});

