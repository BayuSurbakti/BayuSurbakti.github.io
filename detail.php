<?php 
  require 'function.php';

  // $makanan = query("SELECT * FROM makanan");

  $id = $_GET['id'];
  $mkn = query("SELECT * FROM makanan WHERE id = $id")[0];
 ?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail</title>
    <style type="text/css">
    th {
          text-align: center;   
        }
    td {
          text-align: center;
          vertical-align: middle;   
        }
    .borderer1{
      border: 5px solid black;
    }
    .a{
      text-align: left !important;
    }
    .cwmbg{
          top: 0;
          background-image: url('cwm.png');
          background-size: cover;
      }
     .bg{
      background-color: rgba(242, 239,220,.5)!important;
     }
     a{
      text-decoration: none;
      color: black;
     }
     .b{
      text-decoration: none;
      color: white !important;
     }        
    </style>
  </head>
  <body>
    <div class="container-fluid justify-content-center cwmbg w-100 vh-auto borderer1">
      <div class="row container-fluid text-center mb-5">
      <div class="col-6  offset-3">
          <div class="my-3 fs-1 fw-bold" style="text-transform: uppercase;">
            <?php echo $mkn["nama"] ?>
          </div>
          <img src="<?php echo $mkn["gambar"]; ?>" style="width: 50vh;">
      </div>
      </div>
      <div class="row container-fluid  mb-2">
        <div class="col-10 offset-1">
          <div class="card">
          <div class="card-body bg-light">
            <div class="my-1 fs-3 fw-bold borderer1 text-center">
              BAHAN
            </div>
            <?php echo $mkn['bahan'] ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row container-fluid  mb-2">
        <div class="col-10 offset-1">
          <div class="card">
          <div class="card-body bg-light">
            <div class="my-1 fs-3 fw-bold borderer1 text-center">
              CARA
            </div>
            <?php echo $mkn['cara'] ?></div>
          </div>
        </div>
      </div> 
      <div class="text-center py-2">
      <a href="menuutama.php" ><button type="button" class="fw-bolder btn btn-dark">Kembali</button></a>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>