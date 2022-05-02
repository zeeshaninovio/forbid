// Mobile Nav
$('document').ready(function() {
    $('#header .canvas-icon i').click(function() {
        $("right_bar_addtocart .mobile-header").addClass('show');
    });

    $('.right_bar_addtocart .mobile-header .cancel').click(function() {
        $("right_bar_addtocart .mobile-header").removeClass('show');
    });
});
// Mobile Nav
