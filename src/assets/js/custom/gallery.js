import $ from 'jquery';
import 'chocolat';

var Masonry = require('masonry-layout');

var imagesLoaded = require('imagesloaded');

var $galleries = $('.gallery');

$.each($galleries, function(i, e){
  var $gallery = $(e);

  imagesLoaded( $gallery, function() {

    var msnry = new Masonry( e, {
      itemSelector: '.gallery-item',
      percentPosition: true
    });

  } );
});
