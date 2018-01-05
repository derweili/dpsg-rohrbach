jQuery( document ).ready(function() {

  var yearHeadlines = jQuery( ".category-bildergalerie h2.year"); // get all Year Headlines
  var yearNavContainer = jQuery( ".year-nav" ),
      years = []; // get nav container


	// loop through all years
	jQuery(yearHeadlines).each(function(){

    var year = jQuery(this).attr('data-year');

    years.push(year);
		// add new nav item to container
		jQuery( yearNavContainer ).append( "<li><a class='yearscrolllink' href='#year" + year + "'>" + year + "</a></li>");

	});

  var scrollLinks = jQuery('.yearscrolllink');

  jQuery(scrollLinks).on('click', function(e){
      e.preventDefault();
      console.log(e);
       var target = this.hash;
       var $target = jQuery(target);

       var myOff =  $target.offset().top -50;

       jQuery('html, body').stop().animate({
           'scrollTop': myOff
       }, 900, 'swing', function () {

     });
  });


});
