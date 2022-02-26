let navbar = document.querySelector('.navbar');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form');
let formClose = document.querySelector('#form-close');




document.querySelector('#menu-btn').onclick=()=>{
    navbar.classList.toggle('active');
}

//scroll spy

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('.header .navbar a');

window.onscroll = ()=>{
    navbar.classList.remove('active');

    if(window.scrollY>0){
        document.querySelector('.header').classList.add('active');
    }
    else{
        document.querySelector('.header').classList.remove('active');
    }

    section.forEach(sec =>{
        let top =window.scrollY;
        let offset = sec.offsetTop - 200;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(link =>{
              link.classList.remove('active');
              document.querySelector('.header .navbar a[href*='+id+']').classList.add('active');
            });
          };

    }) ;
};

formBtn.addEventListener('click',()=>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click',()=>{
    loginForm.classList.remove('active');
});


window.onload = ()=>{

    if(window.scrollY>0){
        document.querySelector('.header').classList.add('active');
    }
    else{
        document.querySelector('.header').classList.remove('active');
    }
}

var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
    effect: "fade",
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
  });

  var swiper = new Swiper(".team-slider", {
    spaceBetween: 20,
    loop:true,
    
    
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    grabCursor:true,
    breakpoints: {
        0: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
         
        },
        991: {
          slidesPerView: 3,
         
        },
      },
  });