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
    $(document).ready(function() {
      $(window).on('load', function() {
        $("#preloader").fadeOut(1000);
      });
    })
    // Mobile Nav
    $('document').ready(function() {
      $('#header .canvas-icon i').click(function() {
        $("#header .mobile-header").addClass('show');
      });

      $('#header .mobile-header .cancel').click(function() {
        $("#header .mobile-header").removeClass('show');
      });

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
      // our brand page carouse start
      $('.ourbrandcarousel').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
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
        dots: true,
        autoplay: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
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
    });
  }
  // Mobile Nav
</script>