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


    //Banner Slider 

    //Banner Slider


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
}
// Add to cart Nav
$('document').ready(function() {
    $('.shop_sec .atc').click(function() {
        $(".shop_sec .right_bar_addtocart").addClass('show');
    });

    $('.shop_sec .cancel').click(function() {
        $(".shop_sec .right_bar_addtocart").removeClass('show');
    });
});


$('document').ready(function() {
    $('.product_detail .atc').click(function() {
        $(".product_detail .right_bar_addtocart").addClass('show');
    });

    $('.product_detail .cancel').click(function() {
        $(".product_detail .right_bar_addtocart").removeClass('show');
    });
});
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

// single image Pro Slider Js
$('.product-single-image').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
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
// single image Pro Slider Js

// single image Pro Slider Js
$('.sproduct').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
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
// single image Pro Slider Js


$('#Reviews .review_form').hide();
    $('#Reviews .reviewbtn').click(function() {
        $('#Reviews .review_form').toggle();
    })
</script>