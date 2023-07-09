window.addEventListener("DOMContentLoaded", function () {
    $(".slider").slick({
        autoplay: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: true,
        dots: true,
    });
});
