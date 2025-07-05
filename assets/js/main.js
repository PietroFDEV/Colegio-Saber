/* =====================  Slick sliders  ===================== */
$(function () {
  $('.sliderB').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 2500,
  });

  $('.sliderX').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.sliderY'
  });

  $('.sliderY').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.sliderX',
    centerMode: true,
    focusOnSelect: true,
    responsive: [
      { breakpoint: 999, settings: { slidesToShow: 1 } }
    ]
  });

  function adjustSliderXHeight () {
    let maxHeight = 0;
    $('.sliderX .slick-slide.slick-current').each(function () {
      maxHeight = Math.max(maxHeight, $(this).outerHeight());
    });
    $('.sliderX .slick-list').height(maxHeight);
  }

  $('.sliderX')
    .on('init reInit afterChange', adjustSliderXHeight)
    .slick('setPosition');

  /* =========== Reviews slider =========== */
  $('.sliderReviews').slick({
    slidesToShow: 1,
    arrows: true,
    dots: true,
    adaptiveHeight: true
  });
});

/* =====================  Social links  ===================== */
function openFacebook () {
  window.open('https://www.facebook.com/ColegioSaberCuritiba', '_blank');
}
function openInstagram () {
  window.open('https://www.instagram.com/colegiosabercuritiba/', '_blank');
}
function openWhatsApp () {
  window.open(
    'https://wa.me/554195098043?text=Oi,%20tem%20interesse%20em%20ter%20mais%20informações%20do%20Colégio%20Saber?',
    '_blank'
  );
}
function openWhatsAppRegistration (phoneNumber, isMatricula) {
  const msg = isMatricula
    ? 'Olá! Entre em contato para realizar a matrícula!'
    : 'Olá! Entre em contato para realizar a rematrícula!';
  window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(msg)}`, '_blank');
}

/* =====================  Dynamic image gallery  ===================== */
fetch('/get-images.php')
  .then(r => r.json())
  .then(images => {
    const gallery       = document.getElementById('gallery');
    const modalContent  = document.getElementById('modalContent');
    const showMoreBtn   = document.getElementById('showMoreBtn');

    images.slice(0, 9).forEach((src, i) => {
      gallery.insertAdjacentHTML('beforeend', `<div><img class="infra" src="${src}" alt="img${i}"></div>`);
    });

    if (images.length > 9) {
      showMoreBtn.classList.remove('hidden');
      images.forEach(src => modalContent.insertAdjacentHTML('beforeend', `<img class="infra" src="${src}">`));

      showMoreBtn.addEventListener('click', () => {
        document.getElementById('main').classList.add('hidden');
        document.getElementById('nav').classList.add('hidden');
        const modal = document.getElementById('modal');
        modal.classList.remove('hidden');
        modal.style.display = 'flex';
      });

      document.getElementById('closeModal').addEventListener('click', () => {
        const modal = document.getElementById('modal');
        modal.classList.add('hidden');
        modal.style.display = 'none';
        document.getElementById('main').classList.remove('hidden');
        document.getElementById('nav').classList.remove('hidden');
      });
    }
  });

/* =====================  Gallery loader  ===================== */
document.addEventListener('DOMContentLoaded', () => {
  const section = document.getElementById('gallery-section');
  const media   = Array.from(section.querySelectorAll('img, video'));

  if (!media.length) return section.classList.replace('gallery--hidden', 'gallery--visible');

  let loaded = 0;
  const reveal = () => {
    if (++loaded === media.length) {
      document.getElementById('gallery-loader')?.remove();
      section.classList.replace('gallery--hidden', 'gallery--visible');
    }
  };

  media.forEach(el => {
    if (el.tagName === 'IMG') {
      el.complete ? reveal() : (el.onload = el.onerror = reveal);
    } else {
      el.readyState >= 2 ? reveal()
                         : (el.onloadeddata = el.onerror = reveal);
    }
  });
});
