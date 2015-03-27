(function($) {

	$(document).on('ready', function() {
		
		/* show/hide destinations menu
		*/
		$('.header li.destinations, .destinations-menu .close-menu').click(function(e) {
			e.preventDefault();
			$('.header li.destinations').toggleClass('is-open');
			$('.destinations-menu').toggleClass('showing');
		});
		
		$('.destinations-menu > ul > li').hover(
			function() {
				$('.destinations-menu > ul > li').removeClass('showing');
				$(this).addClass('showing');
			}, function() {
			}
		);
		
	    /* map height + scroll
	    */
	    $(function() {

		    var $sidebar		= $(".map"), 
		        $window			= $(window),
		        $windowheight	=	$(window).height(),
		        offset			= $sidebar.offset(),
		        topPadding		= 0;
		        $sidebarOffsetTop	=	offset.top - $(document).scrollTop()
		        
		    $sidebar.height($windowheight - $sidebarOffsetTop);
		
		    $window.scroll(function() {
		        if ($window.scrollTop() > offset.top) {
		            $sidebar.stop().animate({
		                marginTop: $window.scrollTop() - offset.top + topPadding
		            });
		        } else {
		            $sidebar.stop().animate({
		                marginTop: 0
		            });
		        }
		        
		        $sidebar.height($windowheight - $sidebarOffsetTop);
		    });
		});
		

		/* show/hide map
		*/
		var check;
		
		check = $("#filter-map").prop("checked");
		    if(check) {
		        $('.grid12').removeClass('hidecol2');
		    } else {
		        $('.grid12').addClass('hidecol2');
	    }
		
		$("#filter-map").on("click", function(){
		    check = $("#filter-map").prop("checked");
		    if(check) {
		        $('.grid12').removeClass('hidecol2');
		    } else {
		        $('.grid12').addClass('hidecol2');
		    }
		});
		
		
		/* masonry
		var container = document.querySelector('.posts-feed');
		var msnry = new Masonry( container, {
			columnWidth: function( containerWidth ) {
			    return containerWidth / 2;
			},
			gutter: ".gutter-sizer",
			itemSelector: ".col"
		});
		*/
		
	});
	
	
})(jQuery);


/*
    jQuery('.navigation .open a').click(function(event){
	    event.preventDefault;
    });
*/



/* if (!window.getComputedStyle) {
	window.getComputedStyle = function(el, pseudo) {
		this.el = el;
		this.getPropertyValue = function(prop) {
			var re = /(\-([a-z]){1})/g;
			if (prop == 'float') prop = 'styleFloat';
			if (re.test(prop)) {
				prop = prop.replace(re, function () {
					return arguments[2].toUpperCase();
				});
			}
			return el.currentStyle[prop] ? el.currentStyle[prop] : null;
		}
		return this;
	}
} */


/* jQuery(document).ready(function($) {

	var responsive_viewport = $(window).width();
	
	if (responsive_viewport < 481) {
	
	}

	if (responsive_viewport > 481) {
	
	}

	if (responsive_viewport >= 768) {
	
	}
	
	if (responsive_viewport > 1030) {
	
	}
 
}); */

/* (function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
	var doc = w.document;
	if( !doc.querySelector ){ return; }
	var meta = doc.querySelector( "meta[name=viewport]" ),
		initialContent = meta && meta.getAttribute( "content" ),
		disabledZoom = initialContent + ",maximum-scale=1",
		enabledZoom = initialContent + ",maximum-scale=10",
		enabled = true,
		x, y, z, aig;
	if( !meta ){ return; }
	function restoreZoom(){
		meta.setAttribute( "content", enabledZoom );
		enabled = true; }
	function disableZoom(){
		meta.setAttribute( "content", disabledZoom );
		enabled = false; }
	function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
		if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this ); */