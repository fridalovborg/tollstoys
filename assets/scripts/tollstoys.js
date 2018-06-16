(function($) {

		// mobile menu
	$( '.menu-toggle' ).click(function() {

		$('body').toggleClass('menu-active');

		$('.menu-m').toggleClass('active');
		
		if ($( '.menu-m' ).hasClass( 'active' )) {

			$('.menu-m').fadeIn();
			// $('header').addClass('header');
		} else {
			$('.menu-m').fadeOut();
		}
	});

	$('.mobile-cat-menu').click(function() {
		$('.header').toggleClass('mobile-active');

		if($('.header').hasClass('mobile-active')) {
			$('.cat-menu').css('display', 'block');
		} else {
			$('.cat-menu').css('display', 'none');
		}
	});

})(jQuery);