		
		
				<?php
								$koneksi=mysqli_connect("localhost","root","","projek1");
								$posisi=isset($_GET['posisi'])?($_GET['posisi']):'';
								$batas=isset($_GET['batas'])?($_GET['batas']):'';
								
								$sql="SELECT id_status FROM status";
								$query=mysqli_query($koneksi,$sql);
								$jumlah=mysqli_num_rows($query);
								
								
								$batasan=10;
	if(isset($_GET['batas'])){
		$batas=$_GET['batas'];
								}
		else{
				$batas=$batasan;
			}
			
	if(isset($_GET['halaman'])){
		$halaman=$_GET['halaman'];
								}
						if(EMPTY($halaman)){
							$posisi=0;
							$halaman=1;
						}
						
		else{
				$posisi=intval(($halaman-1)*$batas);
			}
			
		if (EMPTY($batas)){
			$batas=intval($batasan);
							}
			else{
				$batas=intval($batas);
			}
								
								$display="SELECT * FROM status ORDER BY id_status DESC	 LIMIT $posisi,$batas";
								$result=mysqli_query($koneksi,$display);
								
								while($row =mysqli_fetch_array($result)){
								echo 'USER : <a href="id=?$id">'.$row['nama_pengguna'].'</a>';
								
								echo "<br/>";
								echo $row['tanggal'];
								echo "&nbsp; |&nbsp; ";
								echo $row['waktu'];
								echo "<p>";
								echo 'Status : <b>'. nl2br ($row['isi_status']).'</b>';
								
								?>
								<hr color="white" style="padding:2px;">
								<?php
								}
								?>
								
								