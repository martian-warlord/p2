<!doctype html>
<html>
<head>
<?php	require('logic.php'); ?>
<meta charset="UTF-8">
<title>p2</title>

</head>
<body>


<h1>XKCD Password Generator<h1>

<h2>Do you need a random phrase password that is easy to remember?  Look no further!<h2/>

	<?php echo $foo; ?><br>

<form method='POST' action='index.php'>
<br>PASSWORD OPTIONS<br>
<input type="checkbox" name="magicnumber" value = "true" >Do you want a randomly generated number added to your password?<br>
<input type="checkbox" name="symbol" value = "true"  >Do you want a random symbol added to your password?<br>
<input type="checkbox" name="style2" value = "true"  > Or do you want something more visual?<br>
<input type='submit' value='Re-Generate Your Password'><br>


<small>WARNING!  I am not a security expert.  This password generator is probably not the best choice for your Swiss bank accounts.  
	However, if you need a password to leave blog comments, perhaps an “easy to remember” phrase password is a reasonable option.</small>



</form>

</body>
</html>
