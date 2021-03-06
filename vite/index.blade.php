<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('ease.name', 'Ease') }}</title>

        @foreach(config('ease.stylesheet_urls') as $url)
            <link href="{{ $url }}" rel="stylesheet">
        @endforeach
    </head>
    <body>
        <div id="app"></div>

        <script type="module" src="{{ config('ease.server_url') }}/src/main.js"></script>
    </body>
</html>
