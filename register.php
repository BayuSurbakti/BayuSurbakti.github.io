<?php 
  require 'function.php';
  session_start();

  if( isset($_SESSION['login'])){
    header("Location: menuutama.php");
        exit;
  }
  
  if( isset($_POST['register'])){
    if( registrasi($_POST) > 0 ){
      echo "<script>
          alert('user baru berhasil ditambahkan');
          </script>";
       header("Location: menuutama.php");   
    }else
    echo mysqli_error($conn);
  }

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="test.css">

    <title>REGISTER</title>
  </head>
  <body>
     <div class="container-fluid">
     <div class="cwmbg1 w-100 vh-100 justify-content-center align-item-center d-flex">
      <div class="container-fluid jarak ">
     <div class="row  me-auto text-center">
       <div class="col-6 offset-3 ">
       <form class="atas" method="POST" action="">
        <div class="mt-5 form-floating">
          <h1 class="display-6 ">REGISTER CWM </h1>
          <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username" required>
            <label for="floatingInput">Username :</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingInput1" placeholder="password" required>
            <label for="floatingInput1">Password :</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password2" class="form-control" id="floatingInput2" placeholder="password2" required>
            <label for="floatingInput2">Konfirmasi Password :</label>
          </div>
          <button type="submit" name="register" class="btn btn-dark fw-bolder">KONFIRMASI </button>
          <div class="row">
           <div class="col-md-6 offset-1"> 
           </div> 
           <a href="Login.php" class="col-12 col-md-5 px-5 fw-bold py-3 fs-md-3" style="font-size: 1rem; font-weight: 800;">Sudah Punya Akun? <br>Sign In !!</a>
          </div>
        </div>
         </div>
 
      </form>
     </div>
      </div>
    </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>