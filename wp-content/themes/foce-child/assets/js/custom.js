document.addEventListener("DOMContentLoaded", function () {

  // fadin

  jQuery(window).scroll(function () {
    jQuery('.fadein').each(function () {

      var _win = jQuery(window),
        _ths = jQuery(this),
        _pos = _ths.offset().top,
        _scroll = _win.scrollTop(),
        _height = _win.height();

      (_scroll > _pos - _height * .7) ? _ths.addClass('anim'): _ths.removeClass('anim');
    });
  });

  // titre

  jQuery(window).scroll(function () {
    jQuery('.reveal').each(function () {

      var _win = jQuery(window),
        _ths = jQuery(this),
        _pos = _ths.offset().top,
        _scroll = _win.scrollTop(),
        _height = _win.height();

      (_scroll > _pos - _height * .7) ? _ths.addClass('reveal-animation'): _ths.removeClass('reveal-animation');
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

  toggle.addEventListener("click", function () {
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

  navItems.forEach(function (navItem) {
    navItem.addEventListener('click', function () {
      toggle.checked = false;
      content.style.display = "block";

    })
  });

  // Sélectionner la case à cocher
  var toggleCheckbox = document.getElementById("toggle");

  // Écouter l'événement de changement de la case à cocher
  toggleCheckbox.addEventListener("change", function () {
    // Vérifier si la case à cocher est cochée
    if (toggleCheckbox.checked) {
      // Sélectionner tous les éléments avec la classe .nav-item
      var navItems = document.querySelectorAll(".nav-item");

      // Itérer à travers chaque élément et ajouter la classe .nav-item-anim
      navItems.forEach(function (item, index) {
        item.classList.remove("nav-item-anim");
        if (toggleCheckbox.checked) {
          window.setTimeout(function () {
            item.classList.add("nav-item-anim");
          }, 200 * (index + 1));
        }
      });
    }
  });

});