$(function() {
    $('.product-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="product-slider__slider-btn product-slider__btnprev"><img src="images/arrow-left-grey.svg" alt=""></button>',
        nextArrow: '<button class="product-slider__slider-btn product-slider__btnnext"><img src="images/arrow-right-grey.svg" alt=""></button>',
    });
    $('.tab').on('click', function(e) {
        e.preventDefault();
        $('.tab').removeClass('tab-active');
        $('.tabs-content').removeClass('tabs-content--active');

        $(this).addClass('tab-active');
        $($(this).attr('href')).addClass('tabs-content--active');
    });
    $('.rate-yo').rateYo({
        rating: 3.6,
        normalFill: "#C4C4C4",
        ratedFill: "#E74C3C",
        starWidth: "30px",
        spacing: "7px",
    });
});