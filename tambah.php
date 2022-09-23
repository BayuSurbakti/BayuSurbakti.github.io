<?php 
	include 'function.php';
	session_start();
		if( !isset($_SESSION['login'])){
		header("Location: login.php");
		exit;
	}

	if( isset($_POST['submit1'])){
		if( tambah($_POST)>0){
			echo "
				<script>
				 alert('data berhasil ditambahkan!');
				 document.location.href ='menuutama.php';
				</script>
				";
		}else{
			echo "
				<script>
				 alert('data gagal ditambahkan!');
				 document.location.href ='menuutama.php';
				</script>
				";
		}
	}

	if( isset($_POST['submit'])){
		if(ubah($_POST)>0){
			echo "
				<script>
				 alert('data berhasil di Update!');
				 document.location.href ='menuutama.php';
				</script>
				";
		}else{
			echo "
				<script>
				 alert('data gagal di Update!');
				 document.location.href ='menuutama.php';
				</script>
				";
		}
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
    <title>Tambah</title>
    <style type="text/css">
    	textarea {
			 resize: none;
			}
		.cwmbg{
		      top: 0;
		      background-image: url('cwm.png');
		      background-size: cover;
		  }
		.border{
			border: 2px solid black !important;
			background-color: rgba(242, 239,220,.2);
			
		} 
		 a{
		 	text-decoration: none;
		 	color: white;
		 }
		 body{
		 	font-weight: bold;
		 }
    </style>
  </head>
  
  <body>
    <div class="container-fluid">
    	<div class="cwmbg w-100 vh-auto ">
    	<h1 class="text-center mb-3">Masukkan Data - Data Makanan Terbaru !!!</h1> 
    	
    	<form method="POST" action="" enctype="multipart/form-data">
    	
    	<div class="container-fluid row justify-content-center align-item-center d-flex">
    	<div class="col-9 border rounded">
    	<?php 
    	if( isset($_GET['id'])){
		$id = $_GET['id'];
		$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];
		if($id > 0){?>
			<input type="hidden" name="id" value="<?= $mkn['id']; ?>">
			<input type="hidden" name="gambarLama" value="<?= $mkn['gambar']; ?>">
			<div class="mb-3">
			  <label for="exampleFormControlTextarea" class="form-label">Nama</label>
			  <textarea class="form-control" name="nama" id="exampleFormControlTextarea" rows="2" required><?= $mkn['nama']; ?></textarea>
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Bahan</label>
			  <textarea class="form-control" name="bahan" id="exampleFormControlTextarea1" rows="4" required><?= $mkn['bahan']; ?></textarea>
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlTextarea2" class="form-label">Cara</label>
			  <textarea class="form-control" name="cara" id="exampleFormControlTextarea2" rows="4" required><?= $mkn['cara']; ?></textarea>
			</div>
    	<div class="mb-3">
			  <label for="exampleFormControlTextarea3" class="form-label">Gambar</label><br>
			  
			  <div class="row">
			  <div class="col-5">
			  <label for="gambarLama" class="form-label">Foto Lama</label>
			  <img src="<?= $mkn['gambar'];?>" class="col-12"  name="gambarLama" id="gambarLama">
				</div>
				<div class="col-5 offset-2">
			  <label for="exampleFormControlTextarea5" class="form-label">Jika Ingin Update Foto Baru Klik Pilih File !!!</label>
			  <input class="col-12 offset-2 my-5 py-5" type="file" name="gambar"  id="exampleFormControlTextarea5" >
			  </div>
				</div>
				<br>
			<div class="row mb-2">
			<div class="btn-group col-4  offset-2 " role="group" aria-label="Basic example">
			  <button type="button" class="btn btn-dark"><a href="hu.php?hapus=UPDATE">KEMBALI</a></button>
			</div>   
			<div class="btn-group col-4 me-0" role="group" aria-label="Basic example">
			  <button type="submit" name="submit" class="btn btn-dark">Submit</button>
			</div>
			</div>
			<?php 
		}
	}else{?>
			<div class="mb-3">
			  <label for="exampleFormControlTextarea" class="form-label">Nama</label>
			  <textarea class="form-control" name="nama" id="exampleFormControlTextarea" rows="2" required></textarea>
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Bahan</label>
			  <textarea class="form-control" name="bahan" id="exampleFormControlTextarea1" rows="4" required></textarea>
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlTextarea2" class="form-label">Cara</label>
			  <textarea class="form-control" name="cara" id="exampleFormControlTextarea2" rows="4" required></textarea>
			</div>
    	
    		<div class="mb-3">
			  <label for="exampleFormControlTextarea3" class="form-label">Gambar</label> <br>
			  <input type="file" name="gambar" required id="exampleFormControlTextarea3" >
			</div><br>
			<div class="row mb-2">
			<div class="btn-group col-4  offset-2 " role="group" aria-label="Basic example">
			  <button type="button" class="btn btn-dark"><a href="menuutama.php">KEMBALI</a></button>
			</div>  
			<div class="btn-group col-4 me-0" role="group" aria-label="Basic example">
			  <button type="submit" name="submit1" class="btn btn-dark">SUBMIT</button>
			</div>
			</div>
			<?php 
		}	
		
    	 ?>
		</div>	
    	</form>
    	</div>
    	</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>