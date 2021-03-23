//mobile menu
const burgerIcon = document.querySelector('#burger');
const navbarMenu = document.querySelector('#nav-links');

burgerIcon.addEventListener('click', () => {
    navbarMenu.classList.toggle('is-active');
})

//glider
const glider = new Glider(document.querySelector('.glider'), {
    slidesToShow: 4.5,
    draggable: true,
    dots: '#dots',
    arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
    },
    responsive: [
        {
          // screens greater than >= 775px
          breakpoint: 775,
          settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 'auto',
            slidesToScroll: 'auto',
            itemWidth: 125,
            duration: 0.25
          }
        },{
          // screens greater than >= 1024px
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            itemWidth: 125,
            duration: 0.25
          }
        }
      ]
})

function sliderAuto(slider, miliseconds) {
  const slidesCount = slider.track.childElementCount;
  let slideTimeout = null;
  let nextIndex = 1;
 
  function slide () {
    slideTimeout = setTimeout(
      function () {
        if (nextIndex >= slidesCount ) {
          nextIndex = 0;
        }
        slider.scrollItem(nextIndex++);
      },
      miliseconds
    );
  }
 
  slider.ele.addEventListener('glider-animated', function() {
    window.clearInterval(slideTimeout);
    slide();
  });
 
  slide();
 }
 
 sliderAuto(glider, 3000)