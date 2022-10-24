$(document).ready(function () {
    $("#home-container").show();
    $("#consult-container").hide();
    $("#contact-container").hide();

    $('#home').click(function () {
        $("#principal-container").hide();
        $("#home-container").show();
        $("#consult-container").hide();
        $("#contact-container").hide();
    })

    $('#consult').click(function () {
        $("#principal-container").hide();
        $("#home-container").hide();
        $("#consult-container").show();
        $("#contact-container").hide();
    })

    $('#contact').click(function () {
        $("#principal-container").hide();
        $("#home-container").hide();
        $("#consult-container").hide();
        $("#contact-container").show();
    })
});