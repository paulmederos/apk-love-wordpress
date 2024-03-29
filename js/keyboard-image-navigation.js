jQuery(document).ready( function($) {
	$(document).keydown( function(e) {
		var url = false;
		if ( e.which === 37 ) {  // Left arrow key code
			url = $( '.nav-previous a' ).attr( 'href' );
		}
		else if ( e.which === 39 ) {  // Right arrow key code
			url = $( '.entry-attachment a' ).attr( 'href' );
		}
		if ( url && ( !$( 'textarea, input' ).is( ':focus' ) ) ) {
			window.location = url;
		}
	});

	$('.icon-menu').click(function(event){
		var parent = $(this).parent();
		isOpened = $(parent).hasClass('opened');
		if (isOpened) {
			$(parent).removeClass('opened');
		} else {
			$(parent).addClass('opened');
		}
		event.preventDefault();
	});
});
