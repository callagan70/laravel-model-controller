<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Importare i file css --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>@yield('title')</title>
</head>

<body>

    {{-- Menu --}}
    @include('includes.header')

    <div class="container">
        {{-- Contenuto dinamico in base alle pagine visualizzate --}}
        @yield('content')
    </div>

    {{-- Import javascript --}}
    <script src=" {{ asset('js/app.js') }} "></script>
</body>

</html>
