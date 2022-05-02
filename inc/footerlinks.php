<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS -->
<!-- Bootstrap CDN -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/scripts.js"></script>
<!-- Bootstrap CDN -->
<!-- Slick Slider CDN -->
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/wow.min.js"></script>
<!-- Slick Slider CDN -->
<script>
<<<<<<< HEAD
  // $('.the-all-reviews-start').slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     autoplay: false,
  //     autoplaySpeed: 1500,
  //     dots: true,
  //     swipeToSlide: true,
  //     centralmode: true,

  // });
=======
// $('.the-all-reviews-start').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     autoplay: false,
//     autoplaySpeed: 1500,
//     dots: true,
//     swipeToSlide: true,
//     centralmode: true,

// });
>>>>>>> e557b82ce88e0fb0d9044bab876d329f0a16a063

  // $('.for-sthe-slickslider').slick({
  //   dots: true,
  //   infinite: false,
  //   speed: 300,
  //   slidesToShow: 2,
  //   slidesToScroll: 4,
  //   responsive: [
  //     {
  //       breakpoint: 1024,
  //       settings: {
  //         slidesToShow: 3,
  //         slidesToScroll: 3,
  //         infinite: true,
  //         dots: true
  //       }
  //     },
  //     {
  //       breakpoint: 600,
  //       settings: {
  //         slidesToShow: 2,
  //         slidesToScroll: 2
  //       }
  //     },
  //     {
  //       breakpoint: 480,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1
  //       }
  //     }
  //     // You can unslick at a given breakpoint now by adding:
  //     // settings: "unslick"
  //     // instead of a settings object
  //   ]
  // });

<<<<<<< HEAD
  $(document).ready(function() {
    $(window).on('load', function() {
      $("#preloader").fadeOut(1000);
    });
    $('.note-wrapper').hide();
    $('button.Add-a-note').click(function() {
      $('.note-wrapper').toggle();
    })
  })
  // WoW js 
  new WOW().init();
  // WoW js 
  // Active js 
  const CurrentLocation = location.href;
  const menuItem = document.querySelectorAll('.navbarMenu ul li a');
  const menuLength = menuItem.length
  for (let i = 0; i < menuLength; i++) {
=======
$(document).ready(function() {
    $(window).on('load', function() {
        $("#preloader").fadeOut(1000);
    });
})
// WoW js 
new WOW().init();
// WoW js 
// Active js 
const CurrentLocation = location.href;
const menuItem = document.querySelectorAll('.navbarMenu ul li a');
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++) {
>>>>>>> e557b82ce88e0fb0d9044bab876d329f0a16a063
    if (menuItem[i].href === CurrentLocation) {
      menuItem[i].className = "active";
    }
  }
  // Active js 

<<<<<<< HEAD
  // Mobile Nav
  $('document').ready(function() {
=======
// Product Detail Slider Start Here
$('.product-single-image').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.product_images'
});
$('.product_images').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.product-single-image',
    dots: false,
    centerMode: true,
    focusOnSelect: true
});
// Product Detail Slider End Here

// Mobile Nav
$('document').ready(function() {
>>>>>>> e557b82ce88e0fb0d9044bab876d329f0a16a063
    $('#header .canvas-icon i').click(function() {
      $("#header .mobile-header").addClass('show');
    });

    $('#header .mobile-header .cancel').click(function() {
      $("#header .mobile-header").removeClass('show');
    });
  });
  // Mobile Nav

  //Banner Slider 

  //Banner Slider

// Related Pro Slider Js
$('.related_slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
// Related Pro Slider Js

<<<<<<< HEAD
  // our brand page carouse start
  $('.ourbrandcarousel').slick({
=======
// our brand page carouse start
$('.ourbrandcarousel').slick({
>>>>>>> e557b82ce88e0fb0d9044bab876d329f0a16a063
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
<<<<<<< HEAD
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  // our brand page carouse end
  // shop page start here
  $('.sproduct').slick({
=======
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
// our brand page carouse end
// shop page start here
$('.sproduct').slick({
>>>>>>> e557b82ce88e0fb0d9044bab876d329f0a16a063
    dots: true,
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
<<<<<<< HEAD
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  // shop page end here
=======
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
// shop page end here

// add to cart Nav
$('document').ready(function() {
    $('.shop_sec .atc').click(function() {
        $(".shop_sec .right_bar_addtocart").addClass('show');
    });

    $('.shop_sec .cancel').click(function() {
        $(".shop_sec .right_bar_addtocart").removeClass('show');
    });
});
// add to cart Nav
>>>>>>> e557b82ce88e0fb0d9044bab876d329f0a16a063
</script>