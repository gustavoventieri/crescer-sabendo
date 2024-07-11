<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')

    </style>
    </head>
    <body class="bg-white overflow-x-hidden">

        @include("components.green.header")
        @yield('content')
        @include("components.green.contactus")
        @include("components.green.footer")
    </body>
</html>
