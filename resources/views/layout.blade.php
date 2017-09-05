<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Cepillos Colgate</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
</head>
<body>
    <div class="wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>