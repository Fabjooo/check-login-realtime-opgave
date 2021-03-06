<?php 
	include_once('classes/User.class.php');
	if(!empty($_POST['username']))
	{
		try 
		{
			$user = new User();
			$user->Username = $_POST['username'];
		
			$user->Create(); //INSERT USER INTO TABLE
			$feedback = "Thanks for signing up!";
			
		} 
		catch (Exception $e) 
		{
			$feedback = $e->getMessage();
		}
		
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/reset.css" media="screen" />
<title>Signup checks</title>
<style type="text/css">
body
{
	font-family: Georgia;
}

label
{
	font-size: 1.4em;
}

input.text
{
	font-size: 1.4em;
}

#signupZone
{
		
}

div.usernameFeedback
{
	display: none;
	width: 200px;
	float: right;
	height: 38px;
	line-height: 38px;
}

img.loadingImage
{
	display:none;
}

input.submit
{
	font-size: 1.4em;
	margin: 15px 0;
}

div.signupForm
{
	width: 460px;
	padding: 20px;
	margin: 25px auto;
}

.ok
{
	background-color: #F0FEE9;
	color: #666666;
}

.notok
{
	background-color: #FFCFCF;
	color: #801B1B;
}

div.feedback
{
	width: 440px;
	margin: 25px auto;
	background-color: #cee2ff;
	padding: 10px;
	text-align: center;
	-moz-border-radius: 4px;
	border: 1px solid #638ac4;
	color: #638ac4;
	text-shadow: 1px 1px 1px #fff;
}	
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

});
</script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<?php if (isset($feedback)): ?>
<div class="feedback">
	<?php echo $feedback; ?>
</div>
<?php endif;?>

<div>

	<div class="signupForm">
		<form action="" method="post">
		<div>
			<label for="username">Username</label>
			
			<div id="signupZone">
				<input class="text" type="text" id="username" name="username" />
				<div class="usernameFeedback"><img id="loadingImage" src="images/loading.gif" /><span>checking</span></div>
			</div>
			
			<br />
			
			<input class="submit" type="submit" value="Create my account" />
		</div>
		</form>
	</div>

</div>
</body>
</html>