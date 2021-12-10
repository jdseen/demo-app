<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </nav>
        <div class="container pt-3 pb-3">
            @yield('content')
        </div>
    </div> 
</body>
<script defer src="{{ mix('js/app.js') }}"></script>
</html>