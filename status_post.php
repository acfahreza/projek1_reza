<?php

SESSION_START();
	$koneksi=mysqli_connect("localhost","root","","projek1");
	
	$email=$_SESSION['email'];
	
								$sql="SELECT * FROM user WHERE email='$email'";
								$query=mysqli_query($koneksi,$sql);
								$jumlah=mysqli_fetch_array($query);
								
								
							
	
	
	$status= $_POST['isi_status'];
	date_default_timezone_set('Asia/Jakarta');
	$waktu = date("H:i:s");
  	$tanggal = date("Y-m-d");
	$jumlah_karakter= strlen($status);
	$insert="INSERT INTO status(id_status,isi_status,nama_pengguna,tanggal,waktu)VALUES(NULL,'$status','$jumlah[nama_pengguna]','$tanggal','$waktu')";
  $save= mysqli_query($koneksi,$insert);
  if($jumlah_karakter<0){
 header('location:artikel.php?error=1');
 } else if($save == 1){
  header('location:artikel.php');
}
 
else{
echo "gagal memasukan";
}
  ?>