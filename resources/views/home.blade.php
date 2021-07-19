<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- TITLE --}}
        <title>Laravel</title>
    </head>

    <body>
        @dump($comicsVolumes)
    </body>
</html>
