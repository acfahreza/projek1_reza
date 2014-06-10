<?php
$email=$_SESSION['email'];
	
								$koneksi=mysqli_connect("localhost","root","","projek1");
								$sql="SELECT * FROM user WHERE email='$email'";
								$query=mysqli_query($koneksi,$sql);
								$jumlah=mysqli_fetch_array($query);
								
								echo "USER : ".$jumlah['nama_pengguna'];
							
								?>