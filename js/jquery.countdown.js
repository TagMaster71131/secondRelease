(function($) {
	$.fn.countdown = function(options) {

		// Inside here will be out plugin code
		//kolla om de funkar..  //alert('Working');

		var settings = { 'date': null };
		if (options) {
			$.extend(settings, options);
		}

		alert(settings['date']);
	}

}) (jQuery); // kolla de här så att det funkar.