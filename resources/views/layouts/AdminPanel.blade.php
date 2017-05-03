<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clinic Kit') }}</title>


        <!-- css -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet">
      <link href="{{ asset('plugins/cubeportfolio/css/cubeportfolio.min.css') }}" type="text/css" rel="stylesheet">
      <link href="{{ asset('css/nivo-lightbox.css') }}" rel="stylesheet">
      <link href="{{ asset('css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" media="screen">
      <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" media="screen">
      <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">

      <!-- MetisMenu CSS -->
      <link href="{{asset('bootstrap/metisMenu/metisMenu.min.css')}} rel=stylesheet">

      <!-- Custom CSS -->
        <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('morrisjs/morris.css')}}" rel="stylesheet">

    	<!-- boxed bg -->
      <link id="bodybg" href="{{ asset('bodybg/bg10.css') }}" rel="stylesheet" type="text/css">
    	<!-- template skin -->
    	<link id="t-colors" href="{{ asset('color/default.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
      @include('partials.AdminHeader');
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
