/**
 * Created by ronyortiz on 12/11/14.
 */


/*jQuery(window).load(function()  {
   
  jQuery('#slider').flexslider({
    animation: "slide",
    direction: "vertical",
		reverse: false,
    controlNav: true,
    directionNav: false,
    animationLoop: true,
    smoothHeight: true,
    slideshow: true,
    slideshowSpeed: 10000,
    animationSpeed: 1500,
    sync: "#carousel",
  });
});
*/

// Slider PAGINA SERVICIOS

jQuery(window).load(function() {
  // The slider being synced must be initialized first
  jQuery('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  jQuery('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});














