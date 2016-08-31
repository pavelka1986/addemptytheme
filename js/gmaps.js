

$(document).ready(function()
{

	if ($('#gmaps').length > 0)
	{
	

				
		var myIcon = {
						url: 'wp-content/themes/bcd-standard/systainer/gfx/signet.svg',
						size: new google.maps.Size(70,80), // the size it should be on the map
						scaledSize: new google.maps.Size(35,40), // the normal size of the image is 90x1100 because Retina asks double size.
						origin: new google.maps.Point(0, 0), // position in the sprite
						anchor: new google.maps.Point(10, 10),
						optimized: true                
					};
					


					

		var pos = new google.maps.LatLng(50.45205, 12.05726),
		
		map = new google.maps.Map(document.getElementById("gmaps"),
		{
			zoom: 13,
			zoomControl: true,
			zoomControlOptions: { style: google.maps.ZoomControlStyle.SMALL },
			streetViewControl: false,
			scaleControl: false,
			center: pos,
			panControl: false,
			mapTypeControl: false,
			mapTypeControlOptions: { style: google.maps.MapTypeControlStyle.DROPDOWN_MENU },
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			overviewMapControl: false,
		    overviewMapControlOptions: { opened: false },
			navigationControl: true,
			navigationControlOptions: { style: google.maps.NavigationControlStyle.SMALL },
	
		}),
		
		marker = new google.maps.Marker(
		{
			position: pos,
			map: map,  		
		});

	}
	
});




