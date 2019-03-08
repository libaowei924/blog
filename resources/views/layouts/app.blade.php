<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#27AE60"/>
        <meta name="Description" content="Andy,你可以在这里阅读喜欢的文章">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} - 优雅的和代码沟通</title>
        <link rel="manifest" href="/manifest.json">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>
    <body>
        @include('layouts._header')

            @yield('content')

        @include('layouts._footer')
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
