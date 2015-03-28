<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>5/3/1 Powerlifting programm Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Calculate your 5/3/1 routine">

        {{-- CSS --}}

        {{--Javascript--}}


        {{--JQuey--}}
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script>
            jQuery(window).ready(function(){
                jQuery("#btnInit").click(initiate_geolocation);
            });
        </script>


    </head>

    <body>

        <div>
            <button id = "btnInit"> Find location</button>

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
                alert('Lat: ' + position.coords.latitude + ' ' +
                'Lon: ' + position.coords.longitude);

        }

    </script>


</html>
