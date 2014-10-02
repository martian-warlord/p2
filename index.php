<!doctype html>
<html>
<head>
<?php require_once('logic.php'); ?>

	<link href='http://fonts.googleapis.com/css?family=Special+Elite%7CScada' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="js/respond.js"></script>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>p2</title>
</head>




<body>
<div class="container">
		<div class="row">
		<div  class="col-md-12 col-sm-12" >

		<h1>Memorable Password Generator</h1>

		</div></div>





				





CUSTOMIZE YOUR PASSWORD


				<div class="row">
				<div  class="col-md-12 col-sm-12 form-group form-inline" > 
<form method='POST' action='index.php'>
				<div class="checkbox"><label><input type="checkbox" name="magicnumber" value = "true" >Add a number?</label></div>
            	
				<div class="checkbox"><label><input type="checkbox" name="symbol" value = "true"  >Add a symbol?</label></div>
            	            	
            	<div class="btn-group">
            	<button type="submit" class="btn btn-default" name="style2" value="true">1 Word</button>
  				<button type="submit" class="btn btn-default" name="words" value="2">2 Words</button>
				<button type='submit' class="btn btn-primary">3 Words</button> </div>

</form>
			

				</div>

			</div>

				<section class="row">
				<section  class="col-md-12 col-sm-12" >

				Your secret password is: <br><br><h3><?php echo $pazzwerd; ?></h3>

				</section></section>
				

	<section class="row">
	<section  class="col-md-6 col-sm-12" >

	<small><br>  WARNING!  I am not a security expert.  This password generator is probably not the best choice for your Swiss bank accounts.  
	However, if you need a password to leave blog comments, perhaps an “easy to remember” phrase password is a reasonable option.  
	This generator is based on the XKCD approach to password security.  XKCD is the idea that long passwords based on natural words are harder to guess or 
	break with brute force than short passwords with random characters.  In general, XKCD passwords are easier to remember. -- Happiness, Love, Joy, Giggles, & Grins, Josh</small>
	<br>


	</section></section>

</div>



<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
