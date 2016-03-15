jQuery(document).ready(function($){
	$('#grid').masonry({
		columnWidth: 400,
	  itemSelector: '.grid-item',
	  isFitWidth: true,
	  isAnimated: true
	});
});