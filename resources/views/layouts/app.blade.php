<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/cloudcrm_favicon.png') . Config::get('app.assets_version') }}" rel="icon">

    <!-- Bootstrap & Custom CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') . Config::get('app.assets_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') . Config::get('app.assets_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') . Config::get('app.assets_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') . Config::get('app.assets_version') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cdn/fonts/font.min.css') . Config::get('app.assets_version') }}">

    <title>@yield('title', 'Admin')</title>
</head>
<body>

    @yield('content')

</body>
</html>
