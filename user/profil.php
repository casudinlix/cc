<?php
include '../setting/server.php';
include '../setting/session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center><h1>Profile <?php echo $_SESSION['username'];?></h1></center>
<center>
<table border='1'>
	<tr>
	<th>No</th>
	<th>Nama Lengkap</th>
	<th>UserName</th>
	<th>Password</th>
	<th>Email</th>
	<th>Telphon</th>
	<th>Alamat Asal</th>
	<th>Jenis Kelamin</th>
	</tr>
</body>
</html>
<?php

$hasil=$conn->query("SELECT * FROM user WHERE id='$_SESSION[username]'");
while ($data=$hasil->fetch_array()) {
	echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['username']."</td>";
		echo "<td>".$data['password']."</td>";
		echo "<td>".$data['email']."</td>";
		echo "<td>".$data['tlp']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td>".$data['jenis_kelamin']."</td>";
		echo "<td> <a href='edit.php?=".$data['id']."'>Edit</a>";
	}

?>