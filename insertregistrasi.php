<?php

SESSION_START();

//panggil file config.php untuk menghubung ke server
$koneksi=mysqli_connect("localhost","root","","projek1");

//tangkap data dari form
$email = $_POST['email'];
$password = $_POST['password'];
$verif_password = $_POST['verif_password'];
$nama_pengguna = $_POST['nama_pengguna'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah'];
$pekerjaan = $_POST['pekerjaan'];

	$sql="SELECT * from user where email='$email'";
	$result= mysqli_query($koneksi,$sql);
	$test= mysqli_num_rows($result);
	
	if ($test <> 0){
		echo "sudah terdaftar";
			header ("location:formlogin.php");
	}else{
		if (!$email || !$password){
		echo "tidak boleh kosong";
	}else{
//simpan data ke database
		$query ="INSERT INTO user values('', '$email', '$password', '$verif_password', '$nama_pengguna', '$tanggal_lahir', '$gender', 
				'$alamat', '$sekolah', '$pekerjaan')" or die(mysql_error());
			$row=mysqli_query($koneksi,$query);

if ($row == 1) {
	echo "regist berhasil";
	header ("location:formlogin.php");
}else{
	echo "regist gagal";
}
}
}
?>

