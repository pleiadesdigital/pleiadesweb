/**
 * Created by ronyortiz on 12/11/14.
 */


jQuery(window).load(function()  {
   
  jQuery('#slider').flexslider({
    animation: "fade",
    controlNav: true,
    animationLoop: true,
    slideshow: false,
    slideshowSpeed: 5000,
    animationSpeed: 500,
    sync: "#carousel",
    prevText: "",
    nextText: ""
  });
});













