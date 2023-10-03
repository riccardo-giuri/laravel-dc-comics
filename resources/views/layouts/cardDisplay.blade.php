<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics-giuri</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- <TheHeader></TheHeader> --}}
    @include('partials.header')

    @yield("CardsContent")

    {{-- <TheFooter></TheFooter> --}}
    @include("partials.footer")
</body>

</html>