<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/buefy.min.css') }}">
    <title>{{ __('messages.app_name') }} | @yield('title')</title>
    @yield('before_import')
</head>
<body>
<div id="app">
    @yield('content')
</div>
<script src="{{ asset('/js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('/js/popper.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="../../js/vue.min.js"></script>
<script src="../../js/app.js"></script>
<script src="{{ asset('/js/buefy.min.js') }}"></script>
@yield('after_import')
</body>
</html>
