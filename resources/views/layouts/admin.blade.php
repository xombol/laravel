<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">
    <title>@yield('title_page')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="{{asset('/dist/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css?v=3.2.0')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    -->

</head>
<body class="sidebar-mini" style="height: auto;">

<div class="wrapper">
    @include('inc.top_menu')
    @include('inc.navbar')
    <div class="content-wrapper">
        <div class="content-header">
            @yield('h2')
        </div>
        <div class="content">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>
</div>

<footer>

    <script src="{{asset('/dist/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('/dist/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>

    <script src="{{asset('/dist/plugins/chart.js/Chart.min.js')}}"></script>

    <script src="{{asset('/dist/js/pages/dashboard3.js')}}"></script>
    <script src="{{asset('/js/demo.js')}}"></script>
    <script src="{{asset('/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('/js/pages/dashboard2.js')}}"></script>
</footer>

</body>
</html>

