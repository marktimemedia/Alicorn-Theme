/*
Name: Toggle Searchbar
Author: Marktime Media
Author URI: http://marktimemedia.com
Version: 0.1
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

(function($){

/* Expanding Search Bar */

	function switchToggle() {
		var bodyWrap = $('.content-body'); // body
		var searchContainer = $('.search-toggle-container'); // container
		var searchToggle = $('.search-toggle-trigger'); // trigger button
		var searchBar = $('.search-toggle-form'); // search form
		var search = $('.search-toggle-form .wp-block-search__input'); // search input
		var searchSubmit = $('.search-toggle-form .wp-block-search__button'); // search button

		if (searchToggle.length) {
			$(document).on('click', '.run-toggle', function(){ // if toggle is closed, click button or to open
				bodyWrap.addClass('search-open');
				searchToggle.removeClass('run-toggle').addClass('search-open');
				searchBar.addClass('search-expanded');
				search.focus().attr('tabindex', 1);
				searchSubmit.attr('tabindex', 1);
			});

			$(document).on('click', '.search-open', function(){ // if toggle is open, close by clicking anywhere on the body
				bodyWrap.removeClass('search-open');
				searchToggle.addClass('run-toggle').removeClass('search-open');
				searchBar.removeClass('search-expanded');
				search.attr('tabindex', -1);
				searchSubmit.attr('tabindex', -1);
			});
		}

	 }

	switchToggle();

})(jQuery);
