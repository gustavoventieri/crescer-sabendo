<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        @vite('resources/css/app.css')


    </head>
    <body class="bg-slate-900">
    <div class="container mx-auto p-4">
        <h1 class="text-red-600">Hello, Tailwind CSS!</h1>
        <p class="text-lg text-gray-700 mt-2">Welcome to your Laravel application with Tailwind CSS!</p>
    </div>
</body>
</html>
