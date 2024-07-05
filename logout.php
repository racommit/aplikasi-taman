<?php 
session_start();
// Menghancurkan Session
session_destroy();

//Mengarahkan pengguna ke halaman login atau halaman
header("location: index.php");
exit();
?>