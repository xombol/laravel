<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page')</title>
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">
   <!-- <link rel="stylesheet" href="css/app.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="/css/Header-Blue.css">
</head>
<body>
@include('inc.header')
<div class="container">


    @include('inc.messages')
    <div class="row">
        <div class="col-lg-9">
            @yield('content')
        </div>
        <div class="col-lg-3">
            @if(Request::is('/'))

                @include('inc.sidebar')
            @endif
        </div>
    </div>




@include('inc.footer')
</div>
</body>
</html>

