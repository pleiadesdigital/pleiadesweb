/**
 * Created by ronyortiz on 06/25/15.
 */


jQuery(document).ready(function($){
    var breakpoint = 769;
    var sf = $('ul.nav-menu');

    if($(document).width() >= breakpoint) {
        sf.superfish({
            delay: 200,
            speed: 'slow'
        });
    }

    $(window).resize(function(){
        if($(document).width() >= breakpoint & !sf.hasClass('sf-js-enabled')) {
            sf.superfish({
                delay: 200,
                speed: 'slow'
            });
        } else if ($(document).width() < breakpoint) {
            sf.superfish('destroy');
        }
    });
});