AOS.init();

new Typed("#typed", {
    strings: [
        "Hello, we are the public sector for investment.",
        "Discover promising investment opportunities in Yemen.",
        "We offer promising investment opportunities in various sectors.",
        

    ],
    typeSpeed: 100,
    delaySpeed: 200,
    loop: true,
});

$("#btn-nav").click(function () {
    $(".nav-menu").toggleClass("active");
});
$("#btn-menu").click(function () {
    $(".nav-menu").removeClass("active");
});
$("#nav-link").click(function () {
    $(".nav-menu").removeClass("active");
});
$("#nav-link1").click(function () {
    $(".nav-menu").removeClass("active");
});
$("#nav-link2").click(function () {
    $(".nav-menu").removeClass("active");
});
$("#nav-link3").click(function () {
    $(".nav-menu").removeClass("active");
});
$("#nav-link4").click(function () {
    $(".nav-menu").removeClass("active");
});
$("#nav-link5").click(function () {
    $(".nav-menu").removeClass("active");
});

$(".carousel").flickity({
    cellAlign: "left",
    contain: true,
    autoPlay: true,
    wrapAround: true,
    pageDots: false,
});
$(".main-carousel").flickity({
    cellAlign: "left",
    contain: true,
    autoPlay: 5000,
    wrapAround: true,
    prevNextButtons: false,
    pageDots: false,
    draggable: false,
});
var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 300,
    speedAsDuration: true
});
var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', { easing: 'easeInQuint' });