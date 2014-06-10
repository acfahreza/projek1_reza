
<!DOCTYPE html>
<html>
<head>
<title>formlogin</title>
<style>
body{
	background-color:orange;
	margin:0;
	padding:0;
	}

input{
	width:200px;
	margin:5px;
	padding:10px;
	}

a{
	margin-left:5px;
}

button{
	padding:10px;
	}
	
form{
	background-color:red;
	height:300px;
	width:400px;
	margin:0;
	padding:0;
	}

	</style>
</head>

<body><center>
<form method="POST" action="verifikasi.php">
<h1>LOGIN</h1>
<input type="email" name="email" placeholder="Email"/>
<br>
<input type="password" name="password" placeholder="Password"/><br/><br/>
<a href="formregistrasi.php">create new account</a>
<br/>	
<br/>
<button type="submit" name="submit">Login</button>
<?php
	if (!empty($_GET['error'])){
	if($_GET['error'] == 1){
	echo "</br>";
	echo "email dan password belum di isi";
	}
	else if ($_GET['error'] == 2){
	echo "email belum di isi";
	}
	else if ($_GET['error'] == 3){
	echo "password belum di isi";
	}
	else if ($_GET['error'] == 4){
	echo "email dan password tidak terdaftar";
	}
	else if ($_GET['error'] == 5){
	echo "password kurang dari 6 karakter";
	}
	}
	?>
	
	</form>
	
	
	</center>
	
</body>
</html>