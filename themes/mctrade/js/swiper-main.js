var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
        1024: {
            slidesPerView: 1,
        },
    },
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var gallery = new Swiper('.hardware_gallery', {
    effect: 'coverflow',
    grabCursor: true,
    //centeredSlides: true,
    autoplay: {
        delay: 3000,
    },
    slidesPerView: 3,
    coverflowEffect: {
        rotate: -30,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
    },
    /*pagination: {
        el: '.swiper-pagination',
    },*/
});