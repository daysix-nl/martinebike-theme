"use strict";

try {
  const buttonHamburger = document.querySelector(".button-hamburger");
  const buttonClose = document.querySelector(".close-button");
  const overlayMobileNavigation = document.querySelector(".hamburger-overlay");
  const overlayMenu = document.querySelector(".overlay-menu");

  buttonHamburger.addEventListener("click", () => {
    overlayMobileNavigation.classList.toggle("show");
    document.querySelector("header").classList.toggle("active-navbar");
    const scrollpos = window.scrollY;

    buttonHamburger.classList.toggle("active");

    console.log(scrollpos);

    overlayMenu.classList.toggle("hidden");
  });

  overlayMenu.addEventListener("click", () => {
    overlayMobileNavigation.classList.remove("show");
    document.querySelector("header").classList.toggle("active-navbar");
    overlayMenu.classList.add("hidden");
    buttonHamburger.classList.toggle("active");
  });
} catch (error) { }

try {
  var swiper = new Swiper(".mySwiper", {
    loop: false,
    spaceBetween: 0,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1.3,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
      },
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: false,
    spaceBetween: 0,
    effect: "fade",

    thumbs: {
      swiper: swiper,
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });

  document.querySelector(".mySwiper").addEventListener("mouseenter", () => {
    swiper2.autoplay.stop();
  });
} catch (error) { }

/*********************/
/*** side-Navbar ***/
/*********************/

// https://css-tricks.com/sticky-table-of-contents-with-scrolling-active-states/
// https://www.bram.us/2020/01/10/smooth-scrolling-sticky-scrollspy-navigation/

try {
  const options = {
    rootMargin: "-45% 0% -55% 0%",
    threshold: 0,
  };

  window.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(async (entry) => {
        const id = entry.target.getAttribute("id");
        if (entry.intersectionRatio > 0) {
          document.querySelector(`.animation-${id}`).classList.remove("hidden");
          document.querySelector(`#${id}`).classList.add("border-effect");
        } else {
          document.querySelector(`.animation-${id}`).classList.add("hidden");
          document.querySelector(`#${id}`).classList.remove("border-effect");
        }
      });
    }, options);

    /**********  Track all sections that have an `id` applied  ***********/
    document.querySelectorAll(" .scroll-list-div[id]").forEach((section) => {
      observer.observe(section);
    });
  });
} catch (error) { }

try {
  var swiper = new Swiper(".mySwiperAnimation", {
    slidesPerView: 1,
    loop: true,
    speed: 1000,

    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
  });
} catch (error) { }

try {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  });

  const hiddenElements = document.querySelectorAll(".card-navigation");
  hiddenElements.forEach((el) => observer.observe(el));
} catch (error) { }

/**********************/
/**** accordion ***/
/**********************/
try {
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.height === panel.scrollHeight + "px") {
        panel.style.height = "0";
      } else {
        panel.style.height = panel.scrollHeight + "px";
        for (let j = 0; j < acc.length; j++) {
          if (this.classList != acc[j].classList) {
            acc[j].classList.remove("active");
            acc[j].nextElementSibling.style.height = "0";
          }
        }
      }
    });
  }
} catch (error) { }

try {
  var swiper = new Swiper(".shop-swiper", {
    direction: "vertical",
    slidesPerView: "auto",
    spaceBetween: 10,
    mousewheel: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
} catch (error) { }

/*********************/
/*** contact overlay ***/
/*********************/
try {
  const contactButton = document.querySelectorAll(".button-contact-overlay");
  const contactOverlay = document.querySelector(".overlay-contact");
  const contactClose = document.querySelector(".button-close");
  const ContactBackground = document.querySelector(
    ".overlay-contact-background"
  );
  for (let i = 0; i < contactButton.length; i++) {
    contactButton[i].addEventListener("click", () => {
      contactOverlay.classList.add("open");
      ContactBackground.classList.add("open");
    });
    contactClose.addEventListener("click", () => {
      contactOverlay.classList.remove("open");
      ContactBackground.classList.remove("open");
    });
    ContactBackground.addEventListener("click", () => {
      contactOverlay.classList.remove("open");
      ContactBackground.classList.remove("open");
    });
  }
} catch (error) { }

try {
  const buttonHamburger = document.querySelector(".button-hamburger");
  window.addEventListener("scroll", () => {
    const scrollpos = window.scrollY;

    if (scrollpos > 150) {
      document.querySelector("header").classList.add("active");
      buttonHamburger.classList.add("active-color");
    } else {
      document.querySelector("header").classList.remove("active");
      buttonHamburger.classList.remove("active-color");
    }
  });
} catch (error) { }



try {
  const buttonClosePopUp = document.querySelector(".closePopUp");
  const popUp = document.querySelector(".pop_up");

  const closePopupAndSetCookie = () => {
    let date = new Date();
    date.setDate(date.getDate() + 7);
    document.cookie =
      "popup=yes; expires=" + date.toUTCString() + ";" + "path=/";
    popUp.classList.add("hidden");
  };

  buttonClosePopUp.addEventListener("click", closePopupAndSetCookie);
  popUp.addEventListener("click", closePopupAndSetCookie);
} catch (error) { }