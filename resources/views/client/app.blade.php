<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('messages.app_name') }}|@yield('title')</title>
    @yield('before_import')
</head>
<body>
<div id="app">
    @yield('content')
</div>
<script src="../../js/vue.min.js"></script>
<script src="../../js/app.js"></script>
@yield('after_import')
</body>
</html>
