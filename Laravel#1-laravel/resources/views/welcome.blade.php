<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Hello, world!</title>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-image: url(img/Night-City.jpg);
    background-size: cover
}

.navbar {
    background: rgba(2, 0, 36, 0.411);
}

.navbar-brand {
  font-family: Comic Sans MS;
}

.jumbotron {
    /* background: rgb(2,0,36);
    background: linear-gradient(228deg, rgba(2,0,36,1) 16%, rgba(109,45,124,1) 69%, rgba(255,175,0,1) 100%); */
    padding-bottom: 25px;
    padding-top: 25px;
}

.list {
    background-color: #131e3859;
    border-radius: 10px;
    width: 200%;
    box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset; 
    padding-bottom: 100px;
    padding-top: 50px;
}

.text {
    background-color: rgb(17, 37, 54);
    border-radius: 65px;
    padding-top: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 100px;
    position: relative;
    width: 80%;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}

.col button {
    margin-bottom: 25px;
    width: 50%;
    background-color: brown;
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark ">
      <div class="container-fluid">
        <a class="navbar-brand"><h3><b>MLIS(Mutuharjo Lab Inventory Sistem)</b></h3></a>
        <form class="d-flex">
          <button class="btn btn-outline-success" type="submit">Log-in</button>
        </form>
      </div>
    </nav>
    <h1></h1>
    <div class="jumbotron">
      <div class="container list text-center text-light">
        <h1 class="text-light">List Laptop</h1>
          <div class="text text-center" data-aos="zoom-in" data-aos-duration="20">
            <div class="row">
              <div class="col">
                <h3>Nama Siswa</h3> 
              </div>
              <div class="col">
                <h3>Unit1</h3>
              </div>
              <div class="col">
                <button class="btn btn-primary" type="button">Start</button>
              </div>
            </div>
          </div>
          <div class="text text-center">
            <div class="row">
              <div class="col">
                <h3>Nama Siswa</h3> 
              </div>
              <div class="col">
                <h3>Unit2</h3>
              </div>
              <div class="col">
                <button class="btn btn-primary" type="button">Start</button>
              </div>
            </div>
          </div>
          <div class="text text-center">
            <div class="row">
              <div class="col">
                <h3>Nama Siswa</h3> 
              </div>
              <div class="col">
                <h3>Unit3</h3>
              </div>
              <div class="col">
                <button class="btn btn-primary" type="button">Start</button>
              </div>
            </div>
          </div>
      </div>
  </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        AOS.init();
      </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>