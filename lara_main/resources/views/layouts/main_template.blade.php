<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page')</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">



    @include('inc.header')
    @include('inc.messages')
    <div class="row">
        <div class="col-lg-9">
            @yield('content')
        </div>
        <div class="col-lg-3">
            @if(Request::is('/'))
            @endif
                @include('inc.sidebar')
        </div>
    </div>




@include('inc.footer')
</div>
</body>
</html>

