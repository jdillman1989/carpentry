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
});