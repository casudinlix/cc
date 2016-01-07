<?php
// memulai session
session_start();
error_reporting(0);

if (isset($_SESSION['role']))
{
 // jika level admin
 if ($_SESSION['role'] == "1"){   

   	header('location:cas/index.php');
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['role'] == "2")
   {
       header('location:user/index.php');
   }
}
if (!isset($_SESSION['role']))
{
 header('location:index.php?Error=Login');
}
 ?>