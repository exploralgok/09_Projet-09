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

      (_scroll > _pos - _height * .7) ? _ths.addClass('reveal-animation') : _ths.removeClass('anim');
    });
  });


  // carroussel

  var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    }
  });

// menu burger fermeture menu au click

itemMenu = document.querySelectorAll('.nav-item');

itemMenu.addEventListener('click', function handleClick() {
  document.querySelectorAll('.nav').classList.add('close-menu');
  });

});



