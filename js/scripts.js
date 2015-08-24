// jQuery( document ).on( 'ready', cb )
// jQuery( document ).ready( cb )
// jQuery( cb )
// $...
// $...

jQuery( function( $ ) {
	
	var $window = $(window);

	$window.scroll(function() {
		var $sections = $("section");
		
		$.each($sections, function(i, val) {
			var $id = $(val).attr("id");

			if ($(window).scrollTop() >= $("#" + $id).position().top - 10) {
				$("li").removeClass("selected");
				$("li." + $id).addClass("selected");
				// $("a").removeClass("selected");
				// $("a." + $id).addClass("selected");
			} else if ($(window).scrollTop() <=20) {
				$("li").removeClass("selected");
				$("li.home").addClass("selected");
				// $("a").removeClass("selected");
				// $("a." + $id).addClass("selected");
			}
		});
	});
});


