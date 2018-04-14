$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");

    $('.overlay').on('click', function(){
        $(".overlay").fadeToggle(200);
        $("#nav-icon3").toggleClass('open');
        $(".button a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });

    $('#nav-icon3').click(function(){
		$(this).toggleClass('open');
        $(".overlay").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
	});
});
