$(document).ready(function () {
    $(".question").on({
        mouseenter: function () {
            $(this).css("background-color", "lightgray");
        },
        mouseleave: function () {
            $(this).css("background-color", "white");
        },
        click: function () {
            $(this).css("background-color", "pink");
        }
    });
});