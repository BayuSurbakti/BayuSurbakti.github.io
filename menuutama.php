<?php 
  require 'function.php';
  session_start();

  if( !isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
  }
  $makanan = query("SELECT * FROM makanan");
   // echo $makanan[0]["nama"];
  $makanan1 = query("SELECT * FROM makanan");

  if(isset($_POST['cari'])){
    $makanan1 = cari($_POST['katakunci']);
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="test.css">
    <link rel="icon" type="image/png" href="logo.png">
     <!-- owl carousel -->
    <link rel = "stylesheet" href = "owl_carousel/owl.carousel.css">
    <link rel = "stylesheet" href = "owl_carousel/owl.theme.default.css">

    <!--fontawesome -->
      <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>CWM</title>
    
  </head>
  <body>
    <div class="main-container container-fluid">
        <div class="cwmbg w-100 vh-100 justify-content-center align-item-center" > 
        <div class="navigasi sticky-top">
          <nav id = "navbar"class="text navbar navbar-expand-lg navbar-light fixed-top" >
              <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="logo.png" style="width: 25%;"></a>
                <div class="navbar2">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto d-flex mx-1">
                  <?php if ($_SESSION['username'] ==='admin'){?>
                    <li class="nav-item dropdown">
                      <a class="a nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        EDITING
                      </a>
                      <ul class="a dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item"  style="color: white !important;" href="tambah.php">CREATE</a></li>
                        <li><a class="dropdown-item" style="color: white !important;" href="hu.php?hapus=HAPUS">HAPUS</a></li>
                        <li><a class="dropdown-item" style="color: white !important;" href="hu.php?hapus=UPDATE">UPDATE</a></li>
                      </ul>
                    </li>
                    <?php } ?>
                    <li class="nav-item mx-1">
                      <a class="a nav-link" aria-current="page" href="#home">HOME</a>
                    </li>
                    <li class="nav-item mx-1">
                      <a class="a nav-link"  href="#new">NEW</a>
                    </li>
                    <li class="nav-item mx-1">
                      <a class="a nav-link" href="#food">FOOD</a>
                    </li>
                    <li>
                     <form class="searchbar mt-md-0 d-flex border rounded-pill px-2 bg-white" method="POST"
                            action="" >
                            <input name="katakunci" class="form-control me-2 bg-transparent border-0" type="search"
                                placeholder="Masak Apa?" aria-label="Search" required autocomplete="off" type="text">
                            <button class="btn" type="submit" name="cari"><i class="fs-3 fas fa-search" style="color: black;"></i></a></button>
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>   
          </div>

         
          <!--Tampilan Awal -->
          <div id="home" class="container-fluid ">
            <div class="jumbotron jumbotron-fluid">
              <div class="row align-item-center jarak">
                <div class="col-sm-12 text-center my-5">
                <h1 class="display-6 ">It's Time To Cook</h1>
                <h1 class="display-2 ">Selamat Datang <?php   echo $_SESSION['username'];?></h1>
                <p class="lead">CWM AKAN MEMBANTU ANDA</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="search">
            <?php  
            if(isset($_POST['cari'])){
              $makanan1 = cari($_POST['katakunci']);
              $y = count($makanan1);
              if($y>0){
              ?>
             <br>
             <h1 class="display-6 ">Search : <?php  echo $_POST['katakunci']?></h1>
             <div class="container row ">
               <div class="col-12 col-md-8 offset-md-3 borderer1 py-2">
                <?php 
                    if($y > 1){
                 ?>
                <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators hilangkan">
                    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php 

                        $z = $y-1;
                        for ($k=0; $k < $z+1 ; $k++) {?>
                          <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="<?php echo ($k+1) ?>" aria-label="Slide <?php echo ($k+2) ?>"></button>
                        <?php }
                     ?>
                  </div>
                  
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                     <img src="<?php
                       echo $makanan1[$z]["gambar"]; ?>" class="d-block w-100 gambar" alt="...">
                      <div class="carousel-caption d-block w-100 px-5">
                        <h5 class="fs-1 title-white px-5"><a href="detail.php?id=<?php echo $makanan[$z]["id"]; ?>" style="color: white !important;"><?php echo $makanan1[$z]["nama"]; ?></a></h5>
                      </div>  
                    </div>
                    <?php for($i = 0 ; $i < $z ;  $i++) : ?>
                     <div class="carousel-item">
                      <img src="<?php echo $makanan1[$i]["gambar"] ?>" class="d-block w-100 gambar" alt="...">
                      <div class="carousel-caption d-block w-100 px-5">
                        <h5 class="fs-1 title-white px-5"><a href="detail.php?id=<?php echo $makanan[$i]["id"]; ?>" style="color: white !important;"><?php echo $makanan1[$i]["nama"] ?></a></h5>
                      </div>
                    </div>
                    <?php endfor; ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              </div>
             
            <?php }else{ $z = $y-1; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                     <img src="<?php
                       echo $makanan1[$z]["gambar"]; ?>" class="d-block w-100 gambar" alt="...">
                      <div class="carousel-caption d-none d-md-block w-100 px-5">
                        <h5 class="fs-1 title-white px-5"><?php echo $makanan1[$z]["nama"]; ?></h5>
                      </div>  
                    </div>
                </div>
            <?php  }
          }
        }

            
            ?>
          </div> 

    <!--carosel-->
    <div class="container mb-4">
    <div class="mt-5 tetap" id="new">
    <h1>Masak Apa Hari Ini ?</h1>
    </div>

    <!-- new -->
    <div class="container-fluid ms-lg-4">
    <div class="row gx-1 ">
      <div class="col-12 col-lg-9">
    <div class="container-fluid carousel-contain pt-5"><!-- offset-lg-1 -->
    <div id="carouselExampleCaptions" class="carousel slide col-lg-12" data-bs-ride="carousel">
        <div class="carousel-indicators hilangkan">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php
              $y = count($makanan);
              $z = $y-1;
             echo $makanan[$z]["gambar"]; ?>" class="d-block w-100 gambar" alt="...">
            <div class="carousel-caption d-none d-md-block w-100 px-5">
              <h5 class="fs-1 title-white px-5"><?php echo $makanan[$z]["nama"]; ?></h5>
            </div>  
          </div>
          <?php for($i = $z-1 ; $i > $z-4 ;  $i--) : ?>
           <div class="carousel-item">
            <img src="<?php echo $makanan[$i]["gambar"] ?>" class="d-block w-100 gambar" alt="...">
            <div class="carousel-caption d-none d-md-block w-100 px-5">
              <h5 class="fs-1 title-white px-5"><?php echo $makanan[$i]["nama"] ?></h5>
            </div>
          </div>
        <?php endfor; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    </div>
    <div class="col-lg-3 d-none d-lg-flex flex-column px-2 pt-5">
      <?php 
        for($i = $z ; $i > $z-4 ;  $i--) : ?>
        <div class="row w-100">
        <div class="col-12">
           <a href="#">
          <img type="button" src = "<?php echo $makanan[$i]["gambar"]?>" alt = "" class = "ket w-75">
        </a>
        </div>
      </div>
       <?php endfor;?>
    </div>
    </div>
  </div>
  </div>
  <div id="food">
  <div class="container mt-4">
    <div class="row mt-1 spasi-atas">
      <h1 class="text-center mt-5"> Let's Cook !!! </h1>
       <p class = "fw-light w-75 mx-auto text-center">Dengan CWM</p>
    </div>

    <div class="row g-0 mt-1 mb-5 text-center owl-carousel owl-theme">
      <?php 
        foreach ($makanan as $mkn) :
          ?><div class="col-lg-12 p-1 item-makanan mx-auto ">
             <div class="makanan-img align-items-center">
           <img src = "<?php echo $mkn["gambar"]; ?>" alt = "" class = "w-90 d-block mx-auto my-auto">
                <div class="row btns w-100 mx-auto text-center">
         <a class = "col tulisan d-block text-dark text-decoration-none py-2" href="detail.php?id=<?php echo $mkn["id"]; ?>"><?php echo $mkn["nama"]; ?></a>
        </div>
      </div>
      </div>
        <?php
        endforeach;
       ?>

    </div>
  </div>
</div>
  <div class="footer">
    <div class="container-fluid bg-dark text-center borderer">
      <div class="row">
      <div class="col-1 col-lg-1 py-5">
        <a href="logout.php"><button type="button" class="btn btn-dark fw-bold ">Logout</button></a>
      </div>
      <div class="col-lg-10 col-11 ps-5">
      <h1>Terimakasih Telah Berkunjung</h1>
      <p>Jika Mengalami Kesulitan Silahkan Chat Ke:<br>
        <i class="fa-brands fa-whatsapp"> : 08xxxxxxxxxxx</i><br>
        <i class="fa-brands fa-instagram"> : @bayu_imantama</i>
      </p>
      </div>
      <div class="col-lg-1  d-none d-lg-block  my-auto img-fluid">
        <img src="logo.png" style="width: 100%;">
      </div>
      </div>
    </div>
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!-- owl carousel -->
    <script src = "owl_carousel/owl.carousel.js"></script>
    <script src = "script.js"></script>

    <script type="text/javascript">
      var nav = document.querySelector('nav');
      var text = document.querySelectorAll('.a');
      let length =  text.length;
      
      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow', 'scrolled');
          nav.classList.remove('bg', 'shadow');
          for(i = 0 ; i < length ; i++){
          text[i].classList.add('text1');
          }
        } else {
          nav.classList.remove('bg-dark', 'shadow');
          nav.classList.add('bg');
          for(i = 0 ; i < length ; i++){
          text[i].classList.remove('text1');
          }
        }
      });
    </script>
  </body>
</html>