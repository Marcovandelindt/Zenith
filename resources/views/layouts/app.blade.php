<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('APP_NAME', 'Zenith') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" media="screen"/>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="font-sans">
<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100 position-fixed" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Zenith</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link @if (Route::is('home')) active @else text-white @endif" aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="{{ route('home') }}"></use>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link @if (Route::is('steps.index')) active @else text-white @endif">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="{{ route('steps.index') }}"></use>
                    </svg>
                    Stappen
                </a>
            </li>
        </ul>
    </div>
    <div class="main-content" style="width: calc(100vw - 280px); margin-left: 280px;">
        <div class="container-fluid">
            <div class="content-wrapper pt-3 px-3">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
