<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/laravel1.css">
    <title>Document</title>
</head>
<body>
    <div class="container">   
        <div class="deskripsi1">
            <div class="text1 text-center text-light">
                <h1>Halaman Laravel 1</h1>
                <h3>{{ $name; }}</h3>
                <p>{{ $email; }}</p>
            </div>
            <div class="img text-center text-dark">
                <div class="img"><img src="img/{{ $image; }}" alt="{{ $email; }}" width="200"></div>
            </div>
        </div>
    </div>
    <div class="test">
        @yield('container')
    </div>
</body>
</html>