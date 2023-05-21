<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/icon.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/icon.png') }}" type="image/png">
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts
</body>

</html>
