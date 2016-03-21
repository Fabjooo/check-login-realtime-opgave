<?php
	include_once('../classes/User.class.php');

	$username = $_POST['username'];
	$sql_check->query("SELECT count(*) FROM tblusers WHERE user_login='".$username."';") or die(mysql_error());

	$db = new PDO("mysqli:hostlocalhost;dbname=php4wa","root","root");
	$result = query($sql_check);
	$user_count = $row[0];
	if($user_count>0)
	{
		echo "username already in use.";
	}
	else
	{
		echo 'OK';
	}

?>