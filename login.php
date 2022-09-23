<?php 
  session_start();
  require 'function.php';

  if( isset($_SESSION['login'])){
    header("Location: menuutama.php");
    exit;
  }

  if( isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE user = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1){

      //Cek password
      $row = mysqli_fetch_assoc($result);
      if( password_verify($password, $row['password'])){
        //SET SESSION
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['username'];
        header("Location: menuutama.php");
        exit;
      }
    }
    $error = true;
  }
    if( isset($error)){
        echo "<script>
          alert('Username Atau Password Anda Salah !!!');
          </script>
          ";
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

    <title>LOGIN</title>
  </head>
  <body>
     <div class="container-fluid">
     <div class="cwmbg1 w-100 vh-100 justify-content-center align-item-center d-flex">
      <div class="container-fluid jarak ">
     <div class="row  me-auto text-center my-5 my-lg-0">
       <div class="col-6 offset-3 ">
       <form class="atas " method="POST" action="">
        <div class="mt-5 form-floating">
          
          <h1 class="display-6 ">LOGIN CWM </h1>
          <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username" required>
            <label for="floatingInput">Username :</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingInput1" placeholder="password" required>
            <label for="floatingInput1">Password :</label>
          </div>
          
          <button type="submit" name="login" class="btn btn-dark fw-bolder">LOGIN</button>
          <div class="row">
            <div class="col-md-6 offset-1"> 
            </div>
           <a href="register.php" class="col-12 col-md-5 px-5 fw-bold py-3 fs-md-3">Belum Punya Akun? <br>Sign Up !!</a>
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