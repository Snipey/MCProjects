<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @yield('style')
    <link rel="stylesheet" href="http://mcprojects.snipey.rocks/assets/css/main.css">
</head>
<body>
<div class="container">
    @include('partial.nav')
    <div class="content">
        @yield('content')
    </div>
    @include('partial.footer')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@yield('script')
</body>
</html>
