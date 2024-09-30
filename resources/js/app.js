import './bootstrap';
import 'bootstrap';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';
import './swiper';
import './home';
import './sobre';
import './blog-post';

// dark mode
const toggles = document.querySelectorAll('.toogle_dark');
const body = document.body;
const suns = document.querySelectorAll('.sun');
const moons = document.querySelectorAll('.moon');

function updateIcons(isDarkMode) {
    if (isDarkMode) {
        moons.forEach(moon => moon.classList.add('active'));
        suns.forEach(sun => sun.classList.remove('active'));
    } else {
        moons.forEach(moon => moon.classList.remove('active'));
        suns.forEach(sun => sun.classList.add('active'));
    }
}

if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    toggles.forEach(toggle => toggle.checked = true);
    updateIcons(true);
} else {
    updateIcons(false);
}

toggles.forEach(toggle => {
    toggle.addEventListener('change', function () {
        if (toggle.checked) {
            body.classList.add('dark-mode');
            localStorage.setItem('theme', 'dark');
            updateIcons(true);
        } else {
            body.classList.remove('dark-mode');
            localStorage.setItem('theme', 'light');
            updateIcons(false);
        }

        toggles.forEach(t => t.checked = toggle.checked);
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

// modal
var closeBtn = document.querySelector(".close"); // Para o outro botão de fechar
closeBtn.onclick = function () {
    var iconModal = document.querySelector(".icon_minimized");
    var modalContent = document.querySelector(".modal_content");
    modalContent.style.display = "none";
    iconModal.style.display = "flex";

    iconModal.onclick = function () {
        modalContent.style.display = "block";
        iconModal.style.display = "none";
    };
};

//cookies
var cookieBtns = document.getElementsByClassName("btn_cookie");

for (var i = 0; i < cookieBtns.length; i++) {
    cookieBtns[i].onclick = function () {

        var cookieContent = document.getElementsByClassName("cookie_content")[0];
        if (cookieContent) {
            cookieContent.style.display = "none";
        }
    };
};








