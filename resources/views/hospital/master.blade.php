<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Doctores UAM</title>
</head>

<body>
    @include('hospital.partials.nav-menu')
    <div class="container section">
        <div class="jumbotron">
            @include('hospital.partials.status')
            @yield('content')
        </div>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
