const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo"; 
}

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light"; 
}

const openMenu = (event) => { // функция открывания меню
  menu.classList.add("is-open"); // вешает класс
  mMenuToggle.classList.add("close-menu")
  document.body.style.overflow="hidden"; // запрещает прокрутку
  lightModeOn();
}

const closeMenu = (event) => { // функция закрывания меню
  menu.classList.remove("is-open"); // убирает класс
  mMenuToggle.classList.remove("close-menu")
  document.body.style.overflow=""; // возвращает прокрутку
  lightModeOff();
}

const swiper = new Swiper('.swiper', {
  speed: 400,
  autoHeight: true,
  loop: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 480px
    590: {
      slidesPerView: 2,
    },
    // when window width is >= 840px
    930: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
       slidesPerView: 5,
    }
  }
});

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault ();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});