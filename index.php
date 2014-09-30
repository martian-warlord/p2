<!doctype html>
<html>
<head>
<?php	require('logic.php'); ?>

<link href='http://fonts.googleapis.com/css?family=Wire+One|Roboto|Orbitron:900' rel='stylesheet' type='text/css'>

<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
			<script src="js/respond.js"></script>
<title>p2</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
	<div class="row">
		<div  class="col-md-12 col-sm-12" >

<h1>XKCD Password Generator<h1>

</div></div>



	<div class="row">
		<div  class="col-md-12 col-sm-12 form-group form-inline" >

<form method='POST' action='index.php'>
<br>PASSWORD OPTIONS<br>
<div class="checkbox"><label><input type="checkbox" name="magicnumber" value = "true" >Add a number?</label>
            </div>
<div class="checkbox"><label><input type="checkbox" name="symbol" value = "true"  >Add a symbol?</label>
            </div>
<div class="checkbox"><label><input type="checkbox" name="style2" value = "true"  > Try a non XKCD password?</label>
            </div>
<button type='submit' class="btn btn-primary">Re-Generate</button>

</div></div>

	<section class="row">
		<section  class="col-md-12 col-sm-12" >

Your secret password is: <h3><?php echo $foo; ?></h3>

</section></section>


</form>

	<section class="row">
		<section  class="col-md-12 col-sm-12" >

<small><br>  WARNING!  I am not a security expert.  This password generator is probably not the best choice for your Swiss bank accounts.  
	However, if you need a password to leave blog comments, perhaps an “easy to remember” phrase password is a reasonable option.  XKCD passwords are based on the idea that long passwords based on natural words are harder to guess or 
break with brute force than short passwords with random characters.  </small>
<br>

</section></section>

</div>



<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
