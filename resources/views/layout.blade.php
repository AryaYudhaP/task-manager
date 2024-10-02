<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>

    <h1 class="text-center">Projek Management Task</h1>

    <div class="mt-3 container">
        @yield('content')
    </div>
    
</body>
</html>