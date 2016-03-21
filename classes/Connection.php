<?php 
		$sHost = "localhost";
		$sUser = "root";
		$sPassword = "root";
		$sDatabase = "php4wa";
		$link = @mysqli_connect($sHost, $sUser, $sPassword, $sDatabase) or die("Oop, dbase is gone!");	
?>