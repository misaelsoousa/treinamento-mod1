import './bootstrap';
import 'bootstrap';
import Swiper from 'swiper';
import { Navigation, Pagination, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

//swiper detalhes
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


//Listagem e paginação

document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.btn_navbar');
    const items = document.querySelectorAll('.item_list, .item_middle');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const cidadeSelecionada = this.dataset.cidade;

            if (this.classList.contains('selected')) {
                items.forEach(item => item.style.display = 'block');
                this.classList.remove('selected');
            } else {
                buttons.forEach(btn => btn.classList.remove('selected'));

                if (cidadeSelecionada === 'todos') {
                    items.forEach(item => item.style.display = 'block');
                } else {
                    items.forEach(item => {
                        if (item.dataset.cidade === cidadeSelecionada) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                }
                this.classList.add('selected');
            }
        });
    });
});

//thumbnail

document.addEventListener("DOMContentLoaded", function () {

    var thumb = document.getElementById('thumb');

    thumb.addEventListener('click', function () {
        thumb.style.display = 'none';
        var player = document.getElementById('player');
        player.style.display = 'block';
        var iframe = document.getElementById('youtube-video');
        iframe.src += "&autoplay=1&mute=1";
    });
});

//dropdown hero

var dropdownToggle = document.getElementsByClassName("dropdown_toggle")[0];
var menuToogle = document.getElementsByClassName("menu_toogle")[0];
var dropdownMenu = document.getElementsByClassName("dropdown_menu")[0];
var nestedDropdownMenu = document.getElementsByClassName("drop_menu")[0];

dropdownToggle.onclick = function () {
    if (dropdownMenu.style.display === 'block' || dropdownMenu.style.display === '') {
        dropdownMenu.style.display = 'none';
        dropdownToggle.style.backgroundColor = 'transparent';
        menuToogle.style.backgroundColor = 'transparent';
        nestedDropdownMenu.style.display = 'none';
    } else {
        dropdownMenu.style.display = 'block';
        dropdownToggle.style.backgroundColor = '#53248F';
    }
};

menuToogle.onclick = function () {
    if (nestedDropdownMenu.style.display === 'block' || nestedDropdownMenu.style.display === '') {
        nestedDropdownMenu.style.display = 'none';
        menuToogle.style.backgroundColor = 'transparent';
    } else {
        nestedDropdownMenu.style.display = 'block';
        menuToogle.style.backgroundColor = '#53248F';

        if (dropdownMenu.style.display === 'none') {
            dropdownMenu.style.display = 'block';
            dropdownToggle.style.backgroundColor = '#53248F';
        }
    }
};

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
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            clickable: true,
        },

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




// navbar
document.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar_content');
    const bannerHeight = document.querySelector('.navbar_content').offsetHeight;

    if (window.scrollY > bannerHeight) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// dark mode
const toggle = document.getElementById('dark-mode-toggle');
const body = document.body;

if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    toggle.checked = true;
}

toggle.addEventListener('change', function () {
    if (toggle.checked) {
        body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
    } else {
        body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
    }
});


// modal
var closeBtn = document.getElementsByClassName("close")[0];
var modal = document.getElementsByClassName("modal_adote")[0];


closeBtn.onclick = function () {

    var modalContent = document.getElementsByClassName("modal_content")[0];
    modalContent.style.display = "none";


    var modalIcon = document.createElement("div");
    modalIcon.classList.add("minimized_icon");
    var xIconsElement = document.createElement("x-icons");
    xIconsElement.setAttribute("path", "catLogo.svg");
    modalIcon.appendChild(xIconsElement);
    modal.appendChild(modalIcon);


    modalIcon.onclick = function () {
        modalContent.style.display = "block";
        modalIcon.style.display = "none";
    }
}

//cookies

var cookieBtns = document.getElementsByClassName("btn_cookie");

for (var i = 0; i < cookieBtns.length; i++) {
    cookieBtns[i].onclick = function () {

        var cookieContent = document.getElementsByClassName("cookie_content")[0];
        if (cookieContent) {
            cookieContent.style.display = "none";
        }
    };
}







