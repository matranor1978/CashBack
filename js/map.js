function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(45.527924, -73.550944),
    zoom:19,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var marqueur = new google.maps.Marker({
		position: new google.maps.LatLng(45.527924, -73.550944),
		map: map
	});
}
google.maps.event.addDomListener(window, 'load', initialize);

