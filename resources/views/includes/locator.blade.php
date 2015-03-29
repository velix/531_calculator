<style>
    #map-canvas {
        width: 500px;
        height: 400px;
        background-color: #CCC;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>


<body>

<div id="map-canvas"></div>

<div>

    {!! Form::open( ['url' => '/dashboard/locateGym', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'coords_form'] ) !!}

    {!! Form::input('hidden', 'lat', null, ['id' => 'lat_in']) !!}

    {!! Form::input('hidden', 'lon', null, ['id' => 'lon_in']) !!}

    <button id = "btnInit" type = "submit"> Set current location as gym</button>



</div>

</body>

<script>

    jQuery(window).ready(function(){
        initiate_geolocation();

    });

    function initializeMap(pos) {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            center: new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var marker = new google.maps.Marker({
            position: mapOptions.center,
            map: map,
            title: 'Current location'
        });
    }


    function initiate_geolocation() {
        navigator.geolocation.getCurrentPosition(handle_geolocation_query, handle_errors);

    }

    function handle_geolocation_query(position)
    {

        //set latitude on form
        jQuery("#lat_in").val(position.coords.latitude);

        //set longitude on form
        jQuery("#lon_in").val(position.coords.longitude);

        initializeMap(position);

    }

    function handle_errors(error)
    {
        switch(error.code)
        {
            case error.PERMISSION_DENIED: alert("user did not share geolocation data");
                break;

            case error.POSITION_UNAVAILABLE: alert("could not detect current position");
                break;

            case error.TIMEOUT: alert("retrieving position timed out");
                break;

            default: alert("unknown error");
                break;
        }
    }



</script>