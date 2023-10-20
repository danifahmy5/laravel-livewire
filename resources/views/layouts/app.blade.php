<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
@vite(['resources/js/app.js', 'resources/css/app.css'])

<body>
    <x-menubar></x-menubar>
    <main class="py-5">
        <div class="container">
            {{ $slot }}

        </div>
    </main>
</body>

</html>
