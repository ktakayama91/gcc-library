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
        <div class="container-fluid">
            <nav class="navbar navbar-inverse">                
            </nav>
        </div>

        @yield('content')

    <!-- jQuery -->    

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>