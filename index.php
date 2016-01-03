<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Kontrakan On</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<h1>Login User</h1>
	<form action="" method="POST" accept-charset="utf-8">
		<table>
		<tr>
		<td>Username</td>
		<td><input type="teks" name="username" value="" placeholder="Username"></td>
		</tr>

		<tr>
		<br/>
		<td>Password</td>
		<td><input type="password" name="pass" value="" placeholder="Password"></td>
		</tr>
		</table>
		<td><input type="submit" name='login' value="LOGIN"></td>
	</form>
	</center>
</body>
</html>

<?php
include "setting/server.php";
if (isset($_POST['login'])=='LOGIN') {
	$username=$_POST['username'];
	$pass=md5($_POST['pass']);

	$cari = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
	if ($cari->num_rows > 0) {

		$_SESSION['nama']=$username;

		header('location:user/index.php');
	}else{
		echo "<center>Maap User<br/>".$username."<br/>Tidak Dikenali";
	}

}


?>