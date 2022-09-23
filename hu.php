<?php 
	require 'function.php';
	session_start();

	  if( !isset($_SESSION['login'])){
		header("Location: login.php");
		exit;
	}
	$makanan = query("SELECT * FROM makanan");

	if(isset($_GET['hapus'])){
		$hapus = $_GET['hapus'];
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		CWM
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		th {
   				text-align: center;   
				}
		td {
 	  			text-align: center;
 	  			vertical-align: middle;   
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
<body">
	<div class="container-fluid justify-content-center cwmbg w-100 vh-auto">
	<h1 class="text-center">Daftar Makanan Yang Ada</h1>
	<div class="table-responsive bg">
	<table class="table table-bordered border-dark justify-content-center align-item-center"> 
		 <thead class="table-dark col-12">
			<th class="col-1">No.</th>
			<th class="col-2"><?php echo $hapus ?></th>
			<th class="col-4">NAMA</th>
			<th class="col-5">GAMBAR</th>
		</thead>
		<?php 
		$i = 1;
		foreach ($makanan as $row) :
		?>
		<tr class="fw-bold">
			<td><?= $i; ?></td>
			<td><a href="<?php if($hapus == 'HAPUS'){
								$hapus = 'HAPUS';
								echo 'hapus';}
								else{
								$hapus = 'UPDATE';
								echo "tambah";}?>
								.php?id=<?= $row["id"]?>" onclick="return confirm('Yakin Ingin <?php echo $hapus; ?>?');"><?php echo $hapus ?>
						
						</td>
			<td><?= $row["nama"] ?></td>
			<td><img src="<?= $row["gambar"]?>" width="150"></td>
	
		</tr>
	</div>	
	<?php 
	$i++;
	endforeach; ?>
	</div>
	</table>
	<div class="btn-group col-2  offset-5 " role="group" aria-label="Basic example">
			  <button type="button" class="btn btn-dark"><a href="menuutama.php" class="b fw-bold">KEMBALI</a></button>
	</div>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>