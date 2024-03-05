document.addEventListener("DOMContentLoaded", function(){

  // fadin

  jQuery(window).scroll(function() {
    jQuery('.fadein').each(function() {

      var _win     = jQuery(window),
          _ths     = jQuery(this),
          _pos    = _ths.offset().top,
          _scroll = _win.scrollTop(),
          _height = _win.height();

      (_scroll > _pos - _height * .7) ? _ths.addClass('anim') : _ths.removeClass('anim');
    });
  });

  // titre

  // const observer = new IntersectionObserver(entries => {
  //   entries.forEach(entry => {
  //     const square = entry.target.querySelector('.reveal');

  //     if (entry.isIntersecting) {
  //       square.classList.add('reveal-animation');
  //     return; // if we added the class, exit the function
  //     }

  //     // We're not intersecting, so remove the class!
  //     square.classList.remove('reveal-animation');
  //   });
  //   });

  // observer.observe(document.querySelector('.reveal-wrapper'));


  // const observer = new IntersectionObserver(entries => {
  //   // Loop over the entries
  //   entries.forEach(entry => {
  //     // If the element is visible
  //     if (entry.isIntersecting) {
  //       // Add the animation class
  //       entry.target.classList.add('reveal-animation');
  //     }
  //   });
  // });

  // observer.observe(document.querySelector('.reveal'));

  jQuery(window).scroll(function() {
    jQuery('.reveal').each(function() {

      var _win     = jQuery(window),
          _ths     = jQuery(this),
          _pos    = _ths.offset().top,
          _scroll = _win.scrollTop(),
          _height = _win.height();

      (_scroll > _pos - _height * .7) ? _ths.addClass('reveal-animation') : _ths.removeClass('reveal-animation');
    });
  });


  // carroussel

  var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    loop: true,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    }
  });


// menu burger fermeture menu au click

// itemMenu = document.querySelectorAll('.nav-item');

// itemMenu.addEventListener('click', function handleClick() {
//   document.querySelectorAll('.nav').classList.add('close-menu');
//   });


// nuage

// window.addEventListener('scroll', function() {
//   const scrollY = window.scrollY;
//   const parallaxContent = document.querySelector('.parallax-content');
//   parallaxContent.style.transform = `translateY(-${scrollY * 0.5}px)`;
// });


// // Variables pour stocker la position de défilement précédente et le timestamp précédent
// let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;
// let lastTimestamp = 0;

// // Fonction pour vérifier si un élément est visible dans la fenêtre
// function isElementInViewport(el) {
//   var rect = el.getBoundingClientRect();
//   return (
//       rect.top >= 0 &&
//       rect.left >= 0 &&
//       rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//       rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//   );
// }

// // Fonction pour gérer l'animation en fonction de la visibilité de la section
// function handleAnimation() {
//   const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//   const timestamp = performance.now(); // Utilise le timestamp haute précision

//   // Calcule la vitesse de défilement
//   const scrollSpeed = Math.abs(scrollTop - lastScrollTop) / (timestamp - lastTimestamp);

//   var parallaxContainer = document.querySelector("#place");

//   if (isElementInViewport(parallaxContainer)) {
//       parallaxContainer.classList.add("visible");

//         // Réglez la durée de l'animation en fonction de la vitesse de défilement
//         const animationDuration = Math.max(0.5 - scrollSpeed, 0.1); // Assurez-vous que la durée ne soit pas inférieure à 0.1s
//         parallaxContainer.style.animationDuration = animationDuration + "s";

//       parallaxContainer.classList.remove("scroll-up");
//       parallaxContainer.classList.add("scroll-down");
//   } else {
//       parallaxContainer.classList.remove("visible");
//       parallaxContainer.classList.remove("scroll-down");
//       parallaxContainer.classList.add("scroll-up");
//     }

//          // Met à jour la position de défilement précédente et le timestamp précédent
//     lastScrollTop = scrollTop;
//     lastTimestamp = timestamp;
// }

// // Écouteur d'événement de défilement pour appeler la fonction de gestion de l'animation
// window.addEventListener("scroll", function() {
//   handleAnimation();
// });

// // Appel initial de la fonction pour gérer l'animation lors du chargement de la page
// handleAnimation();


// v2


// var root = document.documentElement;

//   // Contrôle si on scroll sur la fenêtre
//   window.addEventListener("scroll", () => {
//     // Si on scroll, cela accélère la rotation des fleurs
//     // https://www.toutjavascript.com/reference/ref-window.scrolly.php
//     // var vertical = -1;
//     // setInterval(function () {
//     //   if (window.scrollY != vertical) {
//     //     vertical = window.scrollY;
//     //     root.style.setProperty("--rotate", "3s");
//     //   } else {
//     //     root.style.setProperty("--rotate", "15s");
//     //   }
//     // }, 500);

//     // On bouge les 2 nuages en fonction du scroll
//       posX = Math.round(0 - (window.scrollY - place.offsetTop - 200));
//       if (posX <= 0 && posX > -400) {
//         root.style.setProperty("--posX", posX + "px");
//       }
//   });


// Sélectionnez l'élément que vous souhaitez observer
var root = document.documentElement;

// Contrôle si on scroll sur la fenêtre
window.addEventListener("scroll", () => {
  // On bouge les 2 nuages en fonction du scroll
  var place = document.getElementById("place"); // Assurez-vous de sélectionner l'élément cible correctement
  var posX = Math.round(0 - (window.scrollY - place.offsetTop - 200));
  if (posX <= 0 && posX > -400) {
    root.style.setProperty("--posX", posX + "px");
  }
});

// masquer main site au toggle checked

const toggle = document.getElementById("toggle");
const content = document.querySelector(".site-main");
// const footer = document.querySelector(".site-footer");

toggle.addEventListener("click", function() {
  if (toggle.checked) {
    content.style.display = "none";
    // footer.style.display = "none";

  } else {
    content.style.display = "block";
    // footer.style.display = "block";

  }
});

// masquer menu au click sur lien
const navItems = document.querySelectorAll(".nav-item");

navItems.forEach(function(navItem) {
    navItem.addEventListener('click', function() {
      toggle.checked = false;
      content.style.display = "block";

})
});

const navWrapper = document.querySelector(".nav-wrapper");

toggle.addEventListener("click", function() {
  if (toggle.checked) {
    navWrapper.addClass = "reveal-animation-menu"
  }
});


});

