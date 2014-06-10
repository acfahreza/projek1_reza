<?php
	//kalo username belum ada atau kosong

		SESSION_START();
	if(!isset($_SESSION['email']) || empty($_SESSION['email'])) {
		header('location:formlogin.php');
	} 
?>
