<?php
error_reporting(0);
if (!$_SESSION) {
	session_start();
}

if (!isset($_SESSION['nama']) || ($_SESSION['nama']=='')) {
	header('location:../fail.php');
	exit();
}else{

	echo "Selamat datang<br>".$_SESSION['nama'];
	$id_user =$_SESSION['nama'];
}


?>