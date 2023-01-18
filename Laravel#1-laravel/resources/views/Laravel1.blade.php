<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/laravel1.css">
    <title>Document</title>
</head>
<body>

    @include('partials.navbar')

    <div class="container">   
        <div class="deskripsi1">
            <div class="text1 text-center text-dark">
                <h1>Hello everyOne</h1>
                <h3>{{ $name; }}</h3>
                <p>{{ $email; }}</p>
            </div>
            <div class="imgNtext text-center text-dark">
                <div class="img"><img src="img/{{ $image; }}" alt="" width="200"></div>
                <h5>{{ $Hello; }}</h5>
            </div>
        </div>
        <div class="deskripsi2">
            <div class="text2">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>