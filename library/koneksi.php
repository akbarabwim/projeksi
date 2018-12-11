<?php
	$server = mysqli_connect("localhost","root","") or die (mysqli_error());
	$db = mysqli_select_db($server,"gd_sirs") or die (mysqli_error());
	
	if(!$server){
		echo "Maaf, Gagal tersambung dengan server !";
	}
	if(!$db){
		echo "Maaf, Gagal tersambung dengan database !";
	}
?>