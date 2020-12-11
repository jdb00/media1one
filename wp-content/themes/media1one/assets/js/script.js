var mySwiper = new Swiper('.swiper-container', {
    lazy: true,
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    },
  
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
});

var mySwiper2 = new Swiper('.swiper-container-2', {
    lazy: true,
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination-2',
      dynamicBullets: true,
    },
});

var mySwiperh = new Swiper('.swiper-container-3', {
    lazy: true,
    pagination: '.swiper-pagination-horizontal',
    direction: 'horizontal',
    slidesPerView: 1.25,
    paginationClickable: true,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    navigation: {
        nextEl: '.next-btn',
        prevEl: '.prev-btn'
    },
    breakpoints:{
        960:{
            slidesPerView: 4
        },
        1280:{
            slidesPerView: 3.1
        }
    }
});

$(document).ready(function() {
    $('.gallery-item').click(function(e) {
      $(this).toggleClass('focus', function(){
          $('.focus').fadeIn(500);
      });
      $('.navbar').toggleClass('hidden');
    });
});


$('.sort-group').on( 'click', 'a', function() {
    $('.active').removeClass('active');
    $(this).addClass('active');
    var filterValue = $( this ).attr('data-filter');
    if(filterValue != '*'){
        $('.gallery-item').fadeOut();
        $(filterValue).fadeIn();
    }
    else{
        $('.gallery-item').fadeIn();
    }
    
});

