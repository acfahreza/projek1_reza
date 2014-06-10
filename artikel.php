<?php 
	include ('cek-login.php');
	?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<title>Untitled Document</title>
<style>
body{
margin:0;
padding:0;
}
#content{
background-color:#CCCCCC;
width:50%;
height:auto;
display:block;
position:inherit;
float:inherit;
}
.tulisan{
width:95%;
height:50px;
padding-bottom:30px;
}
</style>
</head>

<body>
<p>
<?php
include ('header.php');
?></p>
<center><div id="content">
							<form method="POST" action="status_post.php">
							<label><a href="#">update artikel</a></label>
							&nbsp;|&nbsp;	
							<label><a href="#">update galeri</a></label>
							<hr>
							<input type="text" name="isi_status" placeholder="Isi status..." class="tulisan"/>
							<br/>
							<input type="submit" name="submit" value="POST">
					<br/>
	</form>
</div>
								
	
  							<div id="content">
  							  <div align="left">
							    <?php
							include ('pengguna.php');
							?>		
							<br/>
							<hr/>
							<?php
							include ('tampil_status.php');
							?>
									
						      </div>
							  </div>
  							
                           
</center>


</body>
</html>
