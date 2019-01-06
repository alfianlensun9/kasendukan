$(function(){
    $(window).scroll(function(){
		if ($(window).scrollTop() > 115) {
			$('main').addClass('mt');
			$('.navbar').addClass('sticky-nav');
		} else {
			$('main').removeClass('mt');
			$('.navbar').removeClass('sticky-nav');
		}
    });
    $('.slider').slider();
    $('.sidenav').sidenav();
    
    $(".dropdown-navbar").dropdown({
		constrainWidth: false,
		inDuration: 250,
		coverTrigger: false,
		belowOrigin: true,
		hover : true
    });
    
    
});