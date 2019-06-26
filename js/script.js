"use strict";
jQuery(function ($) {

    var imgobj = $('a[href$=".jpg"],a[href$=".png"],a[href$=".gif"],a[href$=".JPG"],a[href$=".PNG"],a[href$=".GIF"]');
    imgobj.attr("rel", "fancybox");
    $("a[rel=fancybox]").fancybox({
        'titleShow': true,
    });
}); 

