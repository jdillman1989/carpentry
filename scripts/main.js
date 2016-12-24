jQuery(document).ready(function() {

	// sticky sidebar
	var sidebar = jQuery('.nav-section');
	var content = jQuery('#global-content');
	var sidebarHeight = sidebar.outerHeight();
	var prevHeight = jQuery('.logo').outerHeight();
	var sidebarScroll = "stick";

	if (jQuery(window).width() > 760 && sidebar.outerHeight() < content.height() + 50) {

		jQuery(window).scroll(function() {

			if( jQuery(this).scrollTop() > prevHeight ) {

				sidebar.addClass( sidebarScroll );
			} 
			else {

				sidebar.removeClass( sidebarScroll );
			}
		});
	};

	// mobile nav
	var mobileOpenState = false;

	jQuery(window).resize(function() {
		if (jQuery(window).width() > 760 ) {
			sidebar.css({"transform":"translate(0px, 0px)"});
			mobileOpenState = false;
		}
	});

	jQuery('#mobileNav').click(function() {
		if (mobileOpenState) {
			sidebar.css({"transform":"translate(0px, 0px)"});
			mobileOpenState = false;
		} 
		else{
			sidebar.css({"transform":"translate(" + sidebar.outerWidth() + "px, 0px)"});
			mobileOpenState = true;
		};
	});
});