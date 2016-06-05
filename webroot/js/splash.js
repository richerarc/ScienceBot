/*
 * Main javascript file
 */

$(function(){
    $("#typed-message").typed({
        strings: ["mathématiciens", "étudiants", "scientifiques", "programmeurs", "statisticiens", "comptables", "Analystes de données", "ingénieurs"],
        typeSpeed: 20,
        backSpeed: 30,
        backDelay: 1250,
        loop: true,
    });

    $('.try-part-1').click(function(){
        $(".response-content-1").removeClass("hidden");
    });

    $('.try-part-2').click(function(){
        $(".response-content-2").removeClass("hidden");
    });

    $('.try-part-3').click(function(){
        $(".response-content-3").removeClass("hidden");
    });

    $('.try-part-4').click(function(){
        $(".response-content-4").removeClass("hidden");
    });


});
