<?php
	$host = 'localhost';
	$user = 'root';
	$mp = '';
	$db = 'Base1';
	//Connection au server
	$id = mysqli_connect($host,$user,$mp) or die('Connection au server impossible');
	// echo 'Connection au server reussi<br>';
	//Connection a la base de donnees
	mysqli_select_db($id,$db) or die('Connection a la base de donnees impossible');
	// echo 'Connection a la base de donnees reussi<br>';