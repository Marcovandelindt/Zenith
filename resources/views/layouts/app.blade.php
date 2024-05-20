<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('APP_NAME', 'Zenith') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" media="screen"/>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
<div class="container mx-auto pt-4">
    @yield('content')
</div>
</body>
</html>
