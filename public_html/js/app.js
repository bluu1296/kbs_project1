$(document).ready(function(){
    
    // Activate Carousel
    $("#kut").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#kut").carousel(0);
    });
    $(".item2").click(function(){
        $("#kut").carousel(1);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#kut").carousel("prev");
    });
    $(".right").click(function(){
        $("#kut").carousel("next");
    });

});