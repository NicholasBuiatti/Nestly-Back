<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="flex items-center justify-center h-screen bg-blue-500">
        <h1 class="text-white text-4xl font-bold">
          Benvenuto in Laravel + Tailwind!
        </h1>
      </div>
    </body>
</html>
