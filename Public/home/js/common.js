$(function () {
    $("button.btn-facebook").click(function () {
        $(this).css("background-color", "#335397");
        $(this).css("border-color", "#335397");
        $("button.btn-twitter").css("background-color", "#00b2de");
        $("button.btn-twitter").css("border-color", "#00a6ce");

        $("table#results").css("display", "inline-table");
        $("table#trends").css("display", "none");

        $("span.h-ab-result").css("margin-left", "-25%");
    })
    $("button.btn-twitter").click(function () {
        $(this).css("background-color", "#335397");
        $(this).css("border-color", "#335397");
        $("button.btn-facebook").css("background-color", "#00b2de");
        $("button.btn-facebook").css("border-color", "#00a6ce");

        $("table#results").css("display", "none");
        $("table#trends").css("display", "inline-table");

        $("span.h-ab-result").css("margin-left", "25%");
    })




})