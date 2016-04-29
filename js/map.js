/**
 * Created by ronyortiz on 23/2/16.
 */

// DOCUMENT READY

	function initialize(){
		var cpLatLng = new google.maps.LatLng(-16.539997, -68.062502);
		var mapOptions = {
			zoom: 17,
			scrollwheel: false,
			center: cpLatLng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	
		var marker = new google.maps.Marker({
			position: cpLatLng,
			map: map,
			title: "Pleiades"
		});
		
		var content_string = '<h2>Pleiades - Marketing Digital</h2><p>Edif. Montebello, Bloque C #305</p><p>Calle 30, Cota Cota | La Paz - Bolivia</p><p>Teléfono: +591-2-2916262</p>';
		var info_window = new google.maps.InfoWindow({
			content: content_string,
		})
		
			google.maps.event.addListener(marker,"mouseover",function(){
	    	info_window.open(map, marker);
	  	});

	};
	
	google.maps.event.addDomListener(window, "load", initialize);






