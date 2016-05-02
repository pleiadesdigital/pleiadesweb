jQuery(function(){
	var wheight = jQuery(window).height(); //get height of window
	jQuery('.fullheight').css('height', wheight);
});

jQuery(window).load(function() {
  jQuery('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 150,
    itemMargin: 10,
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




