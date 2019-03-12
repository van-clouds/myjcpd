

$(".wrapper-dropdown-3").click(function () {
    $(this).toggleClass("active");    
})

$(".coursevideomenuitem").on("click", function () {
	$(".coursevideomenuitem").removeClass("itemactive");
    $(this).addClass("itemactive");
})


$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2,
            margin:2
        },
        1000:{
            items:4
        }
    }
})
