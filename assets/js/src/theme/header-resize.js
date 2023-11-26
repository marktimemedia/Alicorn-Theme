/*
Name: Header Resize
Author: Marktime Media
Author URI: http://marktimemedia.com
Version: 0.2
License: GPLv2

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License version 2,
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 GNU General Public License for more details.

 The license for this software can likely be found here:
 http://www.gnu.org/licenses/gpl-2.0.html
*/

(function( $ ){

	/* Scroll Header */

	var $lastScrollTop = $(window).scrollTop(); // reset variable any time it reloads
	var $siteHeader = $('.header-sticky'); // your header element
	var changeDirection = -1; // base comparitive variable
	var shrinkClass = 'header-sticky-small'; // your small header class
	var bodyClass = 'sticky-header-enabled'; // your small body class
	var $headerHeight = $siteHeader.height();

	$(window).load(function(){

		console.log($headerHeight);

		// only if this class exists
		if($siteHeader.length) {
			$('html').addClass(bodyClass);


			$(window).on('scroll', (function(event) {
				var $scrollPosition = $(this).scrollTop();

				if($(window).width() > 784 ) { // we're mobile first so this is anything larger than our mobile breakpoint

					if ($scrollPosition > $headerHeight) { // once you get far enough down, shrink the header

				        $siteHeader.addClass(shrinkClass);

				    } else if ( 0 == $scrollPosition ) { // bring it back up again when we get back to the top

				    	$siteHeader.removeClass(shrinkClass);
				    }

				} else { // this is mobile breakpoint or smaller
					if ($scrollPosition <= 46 ) {

					}

					if ($scrollPosition > 100 && $scrollPosition > $lastScrollTop) { // once you get far enough down, hide the header

				    	changeDirection = -1; // reset changeDirection
				        $siteHeader.addClass(shrinkClass);

				    } else { // bring it back up again if we scroll up at all

				    	if ( -1 == changeDirection) {
				    		changeDirection = $scrollPosition; // only set changeDirection once
				    	}

				    	if ( $scrollPosition < (changeDirection - 100) ) { // only add after you've scrolled up a bit

					    	$siteHeader.removeClass(shrinkClass);
					    	changeDirection = -1; // reset changeDirection
					    }

				    }

				    $lastScrollTop = $scrollPosition;
				}

			}));
		}
	});

})( jQuery );
