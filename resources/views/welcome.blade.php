<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>

    <h1 class="text-center">Selamat Datang!</h1>

    <div class="text-center">
        <a href="{{ route('task.show')}}" class="btn btn-info"> Kelola Data </a>
    </div>
    
</body>
</html>