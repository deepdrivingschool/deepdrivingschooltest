<div id="contact" class="container-fluid">
  <h1>Contact Us</h1>
  <div class="row">
  	<div class="col-sm-12">
  		<div id="googleMap" style="height:400px;width:100%;"></div>
  	</div>
  </div>
  <div class="row">
    <div class="col-sm-12 text-center">
      <h2>Proudly providing driving lessons in Surrey and Delta.</h2>
      <p><span class="glyphicon glyphicon-map-marker"></span> Surrey and Delta, BC</p>
      <p><span class="glyphicon glyphicon-phone"></span> +1 778.887.5600</p>
      <p><span class="glyphicon glyphicon-phone"></span> +1 604.600.1632</p>
    </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(49.127944, -122.862239);

function initialize() {
var mapProp = {
center:myCenter,
zoom:11,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>