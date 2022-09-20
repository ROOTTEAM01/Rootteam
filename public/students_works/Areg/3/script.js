$(function(){	
	// var x=($('.aside').innerHeight());
	// $('.navi').css({
	// 	'height': x+'px',
	// });
	$('.menu').click(function(){
		$('.menu').toggleClass('menuOpen');
		$(".nav-link span").toggle();
		$('.navi').toggleClass('w-100');
	});
	$('.hud ').click(function(){
		// var y=($('.main').innerHeight());
		// $('.navi').css({
		// 	'height': y+'px',
		// });
		$('.main').toggle(); 
		$('.aside').toggleClass(''); 
		$('.main').toggleClass('border border-left-0');
        $('.aside').toggle();
       $('.h').toggleClass('text-primary');
     });
});