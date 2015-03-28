<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
    jQuery(window).ready(function(){
        jQuery("#btnInit").click(initiate_geolocation);
        jQuery("#btnInit").click(function(){
            alert("button clicked");
        });
    });
</script>


<body>

<div>

    {!! Form::open( ['url' => '/coordinates', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'coords_form'] ) !!}

    {!! Form::input('hidden', 'lat', null, ['id' => 'lat_in']) !!}

    {!! Form::input('hidden', 'lon', null, ['id' => 'lon_in']) !!}

    <button id = "btnInit"> Set current location as gym</button>



</div>

</body>

<script>

    function initiate_geolocation() {
        navigator.geolocation.getCurrentPosition(handle_geolocation_query, handle_errors);
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

    function handle_geolocation_query(position){
//        alert('Lat: ' + position.coords.latitude + ' ' +
//        'Lon: ' + position.coords.longitude);

        //set latitude on form
//        var coord_elem = document.getElementById("lat_in");
//        coord_elem.value = position.coords.latitude;

        jQuery("#lat_in").val(position.coords.latitude);

        //set longitude on form
//        coord_elem = document.getElementById("lon_in");
//        coord_elem.value = position.coords.longitude;

        jQuery("#lon_in").val(position.coords.longitude);

    }

</script>