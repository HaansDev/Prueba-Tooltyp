
const windowWidth = window.innerWidth;

if (windowWidth < 1024) {
    var swiper = new Swiper('.mySwiper', {
        slidesPerView: 'auto',
        grabCursor: true,
        initialSlide: 0,
        slidesOffsetBefore: 40, // Margen izquierdo de las tarjetas
        slidesOffsetAfter: 90, // Margen derecho de las tarjetas
    })
}