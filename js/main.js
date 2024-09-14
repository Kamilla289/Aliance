const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
}

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
}

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

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




const swiper = new Swiper('.header-slider', {
  speed: 400,

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
    },
  }
});

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("74px") : changeNavHeight("94px");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault ();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});


const swiperSteps = new Swiper('.steps-slider', {
  speed: 400,
  autoHeight: true,
  loop: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.steps-button-next',
    prevEl: '.steps-button-prev',
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
    1000: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
       slidesPerView: 4,
    },
  }
});

const swiperBlog = new Swiper('.blog-slider', {
  speed: 400,
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 590px
    590: {
      slidesPerView: 1,
    },
    // when window width is >= 1000px
    1000: {
      slidesPerView: 2,
    },
    // when window width is >= 1200px
    1200: {
       slidesPerView: 2,
    },
  }
});

const modal = document.querySelector (".modal");
const modalDialog = document.querySelector (".modal-dialog");

document.addEventListener("click", event => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) && modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); //Собираем все формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
      errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимально 30 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ]);
});