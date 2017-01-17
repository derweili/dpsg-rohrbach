jQuery( document ).ready(function() {
  
  var yearHeadlines = jQuery( ".category-bildergalerie h2.year"); // get all Year Headlines
  var yearNavContainer = jQuery( ".magellannav" ); // get nav container
  var stickyNav = jQuery( ".stickynav" ); // get nav container


	// loop through all years
	var magellanLoop = jQuery(yearHeadlines).each(function(){

		var magellanTarget = jQuery( this ).attr("data-magellan-target"); // get magellan id from year element
		var itemYear = jQuery( this ).attr("data-year"); // get year from element

		// add new nav item to container
		jQuery( yearNavContainer ).append( "<li><a href='#" + magellanTarget + "'>" + itemYear + "</a></li>");

	});


 	// callback function when all items are added
 	var loadSlider = function(){
  		// init magellan nav
  		var newMagellanNav = new Foundation.Magellan(yearNavContainer);
		var newSticky = new Foundation.Sticky(stickyNav);

  	};

	// load callback function when each loop has finished
	jQuery.when(magellanLoop)
		.then(  loadSlider, loadSlider );


});