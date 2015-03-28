<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>


<body>

@yield('body')

@include('includes.footer')

{{-- Javascript --}}
<script src={{ URL::asset('js/jquery-1.8.2.min.js') }}></script>
<script src={{ URL::asset('bootstrap/js/bootstrap.min.js') }}></script>
<script src={{ URL::asset('js/jquery.backstretch.min.js') }}></script>
<script src={{ URL::asset('js/scripts.js') }}></script>

</body>

</html>