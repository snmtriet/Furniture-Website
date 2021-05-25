$('.btn').click(function() {
    $('.btn i').toggleClass("rotate-bars");
    $('.sidebar').toggleClass("hide");
    $('.content').toggleClass("expand-content");
    $('#title_top').toggleClass("expand-contents");
});

$('.charts-btn').click(function() {
    $('nav ul .chart-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
});

$('.multi-btn').click(function() {
    $('nav ul .multi-show').toggleClass("show1");
    $('nav ul .second').toggleClass("rotate");
});

$('nav ul li').click(function() {
    $(this).addClass("active").siblings().removeClass("active");
});