<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eCom-en</title>

    {{-- app css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

        <div class="h-100 
            @if (Request::is('login'))
                d-flex flex-column justify-content-between
            @endif
        ">

            {{-- header --}}
            {{ View::make('components.header') }}

            {{-- content --}}
            @yield('content')

            {{-- footer --}}
            {{ View::make('components.footer') }}

        </div>

    {{-- app js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>