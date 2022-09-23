<?php 
	//Koneksikan database
	$conn = mysqli_connect("localhost","root","","cookwithme");

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row =  mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		} 
		return $rows;

	}
	
	function hapus($id){
		global $conn;

		$query = "DELETE FROM makanan WHERE id = $id";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function tambah($data){
		global $conn;

		$nama = $data['nama'];
		$cara = $data['cara'];
		$bahan = $data['bahan'];

		$gambar = upload();
		if( !$gambar ){
			return false;
		}
		$query = "INSERT INTO makanan
				  VALUES ('','$nama','$bahan','$cara','$gambar')";
		mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);
	}

	
	function ubah($data){
		global $conn;

		$id = $data['id'];
		$nama = $data['nama'];
		$cara = $data['cara'];
		$bahan = $data['bahan'];
		$gambarLama = $data['gambarLama'];

		//Cek apakah user pilih gambar baru atau tidak
		if( $_FILES['gambar']['error'] === 4){
			$gambar = $gambarLama;
		}else{
		$gambar = upload();
		}

		$query = "UPDATE makanan SET
				  nama = '$nama',
				  bahan = '$bahan',
				  cara  = '$cara',
				  gambar = '$gambar'
				  WHERE id = $id ";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}
 
	function cari($katakunci){
		global $conn;

		$query = "SELECT * FROM makanan WHERE 
				  nama LIKE '%$katakunci%'
				  ";
		return query($query);		  
	}

	function upload(){

		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		//cek apakah tidak ada gambar yang diupload
		if( $error === 4){
			echo "<script>
				  alert('Pilih gambar Terlebih dahulu!');
				  </script>
				  ";
				  return false;
		}

		//cek apakah yang diupload adalah gambar
		$ekstensiGambarValid = ['jgp', 'jpeg', 'png'];
		//memecah nama file -> bayu.jpg -> bayu dan jpg
		$ekstensiGambar = explode('.', $namaFile);
		// Buat huruf kecil dan ambil tanda titik terakhir
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		//cek string yang ada dalam array
		if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
			echo "<script>
				  alert('Yang anda upload bukan gambar!');
				  </script>
				  ";
				  return false;
		}


		//cek jika ukuran terlalu besar
		if( $ukuranFile > 1000000){
			echo "<script>
				  alert('Ukuran Gambar Terlalu besar');
				  </script>
				  ";
				  header("Location: index.php");
				  exit;
		}


		// lolos pengecekan, gambar siap diupload
		//generate nama gambar baru
		$namaFilebaru = uniqid();
		$namaFilebaru .= '.';
		$namaFilebaru .= $ekstensiGambar;
		// var_dump($namaFilebaru); die;
		move_uploaded_file($tmpName, $namaFilebaru);

		return $namaFilebaru;

	}




	//Registrasi
	function registrasi($data){
		global $conn;

		$username = strtolower(stripslashes($data['username']));
		$password = mysqli_real_escape_string($conn, $data['password']);
		$password2 = mysqli_real_escape_string($conn, $data['password2']);

		//Cek username yang telah ada
		$result = mysqli_query($conn, "SELECT user FROM user WHERE user = '$username'");

		if( mysqli_fetch_assoc($result)){
			echo "<script>
 					alert('username sudah terdaftar!');
 				  </script>";
 			return false;
		}

		//Cek konfirmasi password
		if ($password !== $password2  ){
			echo "<script>
					alert('Konfirmasi Password tidak sesuai !');
				  </script>";
			return false;
		}

		//enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//Memasukkan data
		mysqli_query($conn, "INSERT INTO user VALUES('','$username' ,'$password')");

		return mysqli_affected_rows($conn);  
	}
 ?>