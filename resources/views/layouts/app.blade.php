<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>

    <body>       

        @include('layouts.navbar')

        @yield('content')

    <!-- jQuery -->    

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>