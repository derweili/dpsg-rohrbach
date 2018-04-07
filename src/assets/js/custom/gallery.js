import $ from 'jquery';
import 'chocolat';

var Masonry = require('masonry-layout');

var imagesLoaded = require('imagesloaded');

imagesLoaded( $('.gallery'), function() {

    var msnry = new Masonry( '.gallery', {
        itemSelector: '.gallery-item',
        percentPosition: true
    });

} );