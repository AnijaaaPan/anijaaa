import $ from "jquery";

$(function () {
    $("#nav_toggle").on("click", function () {
        $("#top-head").toggleClass("open");
        $("nav").slideToggle(500);
    });

    $("nav a").on("click", function () {
        if (window.innerWidth <= 680) {
            $("#top-head").toggleClass("open");
            $("nav").slideToggle(500);
        }
    });
});
