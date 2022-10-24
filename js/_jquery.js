$(document).ready(function () {
    $("#home-container").show();
    $("#profile-container").hide();
    $("#contact-container").hide();

    $('#home').click(function () {
        $("#home-container").show();
        $("#profile-container").hide();
        $("#contact-container").hide();
    });

    $('#profile').click(function () {
        $("#home-container").hide();
        $("#profile-container").show();
        $("#contact-container").hide();
    });

    $('#contact').click(function () {
        $("#home-container").hide();
        $("#profile-container").hide();
        $("#contact-container").show();
    });

    $('.message a').click(function () {
        $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
    });
});