


/*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, navId)=>{
  const toggle = document.getElementById(toggleId),
  nav = document.getElementById(navId)

  if(toggle && nav){
    toggle.addEventListener('click', ()=>{
      nav.classList.toggle('show')
      toggle.classList.toggle('bx-x')
    })
  }
}
showMenu('header-toggle','nav-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');   

function linkAction(){
/*Active link*/
navLink.forEach(n => n.classList.remove('active'));
this.classList.add('active');
}
navLink.forEach(n => n.addEventListener('click', linkAction));

























 
$(document).ready(function(){ 
  //slider start one=====================================================================;
      $('.banner-slider').slick({
          autoplay: true,
          autoplaySpeed: 1800, 
          dots: true,
        
          arrows:true,
          prevArrow:'<i class="fas fa-chevron-left  previous-arrow"></i>',
          nextArrow:'<i class="fas fa-chevron-right  next-arrow"></i>',
          responsive: [
            {
              breakpoint: 992,
              settings: {
            
              }
            },
            {
              breakpoint: 768,
              settings: {
          
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
        
                arrows:false
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]

          });
       //slider start;



  //slider start two=====================================================================; 
  $('.banner-slider1').slick({
    autoplay: false,
    autoplaySpeed: 1800, 
    dots: false,
    slidesToShow: 5,
    arrows:true,
    prevArrow:'<i class="fas fa-chevron-left  previous-arrow"></i>',
    nextArrow:'<i class="fas fa-chevron-right  next-arrow"></i>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
      
        }
      },
      {
        breakpoint: 768,
        settings: {
    
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false,
          
          arrows:false
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]

    });











  //slider start two=====================================================================; 
  $('.banner-slider2').slick({
    autoplay: false,
    autoplaySpeed: 1800, 
    dots: false,
    slidesToShow: 7,
    arrows:true,
    prevArrow:'<i class="fas fa-chevron-left  previous-arrow"></i>',
    nextArrow:'<i class="fas fa-chevron-right  next-arrow"></i>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
      
        }
      },
      {
        breakpoint: 768,
        settings: {
    
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          dots: false,
          
          arrows:false
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]

    });
































});   



document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});




















$(window).ready(function () {
  $('#preloader').delay(500).fadeOut('fade');
});
/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader(){
  const header = document.getElementById('menu')
  // When the scroll is greater than 100 viewport height, add the scroll-header class to the header tag
  if(this.scrollY >= 90) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)
/*==================== CHANGE BACKGROUND HEADER end ====================*/

/*==================== SHOW SCROLL UP ====================*/ 
function scrollUp(){
  const scrollUp = document.getElementById('scroll-up');
  // When the scroll is higher than 200 viewport height, add the show-scroll class to the a tag with the scroll-top class
  if(this.scrollY >= 300) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)
/*==================== SHOW SCROLL UP ====================*/ 
