<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/icon.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/icon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
    @livewireStyles
    @stack('style')
</head>

<body>
    <div id="app">
        @include('components.sidebar')
        <div id="main" class='layout-navbar'>
            @include('components.navbar')
            <div id="main-content">
                {{ $slot }}
            </div>
        </div>
    </div>
    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @livewireScripts
    @stack('script')
</body>

</html>
