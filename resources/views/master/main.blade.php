<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}" />
    @yield('style')
</head>

<body>
    <div id="main">
        @include('components.sidebar')
        @include('components.navbar')
        @yield('content')
    </div>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    @yield('script')
</body>
</html>