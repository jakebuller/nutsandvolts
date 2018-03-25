// JavaScript Document
$(document).ready(function () {
    $('#home-slider').bjqs({
        height: 720,
        width: 960,
        keyboardnav: true,
        responsive: true
    });

    $('#testimonial-slider').bjqs({
        height: 725,
        width: 560,
        keyboardnav: true,
        responsive: true
    });

    $('#for-sale-slider').bjqs({
        keyboardnav: true,
        responsive: true,
        automatic: false
    });
});
