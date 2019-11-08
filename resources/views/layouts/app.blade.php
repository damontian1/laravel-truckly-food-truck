<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Truckly</title>
    <link rel='shortcut icon' type='image/x-icon' href='./assets/favicon.ico'/>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOVdVZ3zaOCmKcbrD0MV7TyKJbFbIOpqk"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">
    @include("partials.navbar")
    <div id="app" style="flex: 1;min-width: 400px;">
        <main>
            @yield('content')
        </main>
    </div>
    @include("partials.footer")
</body>
</html>
