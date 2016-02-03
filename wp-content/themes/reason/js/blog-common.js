$(window).load(function() {

	var mq = window.matchMedia( "(min-width: 481px)" );

	if (mq.matches) {
		$('.grid').masonry({
			itemSelector: '.grid-item',
			gutter : 60,
			isResizable: true
		});
	} else {
		$('.grid').masonry({
			itemSelector: '.grid-item',
			gutter : 25,
			isResizable: true
		});
	}

	// Masonry
	$( window ).resize(function() {

		if (mq.matches) {
			$('.grid').masonry({
				itemSelector: '.grid-item',
				gutter : 60,
				isResizable: true
			});
		} else {
			$('.grid').masonry({
				itemSelector: '.grid-item',
				gutter : 25,
				isResizable: true
			});
		}

	});

});