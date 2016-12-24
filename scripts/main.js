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

	jQuery(window).resize(function() {
		if (jQuery(window).width() < 760){
			sidebar.removeClass( sidebarScroll );
		}
	}

	// mobile nav
	var mobileOpenState = false;
	var mobileNav = jQuery('#mobileNav');

	jQuery(window).resize(function() {
		if (jQuery(window).width() > 760 ) {
			sidebar.css({"transform":"translate(0px, 0px)"});
			mobileNav.removeClass('open');
			mobileOpenState = false;
		}
	});

	mobileNav.click(function() {
		if (mobileOpenState) {
			sidebar.css({"transform":"translate(0px, 0px)"});
			mobileNav.removeClass('open');
			mobileOpenState = false;
		} 
		else{
			sidebar.css({"transform":"translate(" + -1 * (sidebar.outerWidth()) + "px, 0px)"});
			mobileNav.addClass('open');
			mobileOpenState = true;
		};
	});
});