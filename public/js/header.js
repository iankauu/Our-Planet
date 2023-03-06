setTimeout(function(){
    $('.loader_bg').fadeToggle();

}, 1500);
$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
        $("nav").addClass("black");
    }
    else {
        $("nav").removeClass("black")
    }
})
