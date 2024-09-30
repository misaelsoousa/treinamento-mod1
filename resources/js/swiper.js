import Swiper from 'swiper';
import { Navigation, Pagination, EffectFade, Scrollbar } from 'swiper/modules';

// swiper hero

document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper_hero', {
        modules: [Pagination, EffectFade],
        loop: true,
        effect: 'fade',
        autoplay: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        fadeEffect: {
            crossFade: true
        },
    });
});

// swiper history
document.addEventListener('DOMContentLoaded', function () {

    const timelineSlider = new Swiper('.swiper_history', {
        modules: [Navigation, EffectFade],
        slidesPerView: 4,
        spaceBetween: 50,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            clickable: true,
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
            },
            800: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            },
            1500: {
                slidesPerView: 4,
            }
        }
    });
});
// swiper depoimentos
document.addEventListener('DOMContentLoaded', function () {
    const timelineSlider = new Swiper('.swiper_depoimentos', {
        modules: [Navigation, EffectFade],
        slidesPerView: 3,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            1420: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1890: {
                slidesPerView: 3
            }
        }
    });
});


//swiper post
document.addEventListener('DOMContentLoaded', function () {

    const timelineSlider = new Swiper('.swiper_post', {
        modules: [Navigation, EffectFade, Scrollbar],
        slidesPerView: 3,
        loop: true,
        spaceBetween: 0,

        scrollbar: {
            el: '.swiper-scrollbar',
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            1420: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1890: {
                slidesPerView: 3
            }
        }
    });
});

//swiper blog
document.addEventListener('DOMContentLoaded', function () {

    const timelineSlider = new Swiper('.swiper_blog', {
        modules: [Navigation, EffectFade],
        slidesPerView: 3,
        loop: true,
        spaceBetween: 50,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            1420: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1890: {
                slidesPerView: 3
            }
        }

    });
});


//swiper detalhes
document.addEventListener('DOMContentLoaded', function () {

    const timelineSlider = new Swiper('.swiper_detalhes', {
        modules: [Navigation, EffectFade],
        slidesPerView: 4,
        loop: true,
        spaceBetween: 5,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            1420: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1890: {
                slidesPerView: 3
            }
        }
    });
});

// swiper listagem
document.addEventListener('DOMContentLoaded', function () {

    const timelineSlider = new Swiper('.swiper_listagem', {
        modules: [Navigation, EffectFade],
        slidesPerView: 5,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            clickable: true,
        },

    });
});




// swiper clientes
document.addEventListener('DOMContentLoaded', function () {

    const timelineSlider = new Swiper('.swiper_clientes', {
        modules: [Pagination, EffectFade],
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

    });
});
