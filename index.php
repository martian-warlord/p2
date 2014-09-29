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

<p>WARNING!  I am not a security expert.  This password generator is probably not the best choice for your Swiss bank accounts.  However, if you need a password to leave blog comments, perhaps an “easy to remember” phrase password is a reasonable option.</p>


	<form method='POST' action='index.php'>
    Choose a password type<br>
   <input type="radio" name="passwordStyle" value="Affirmation">Affirmative<br>
   <input type="radio" name="passwordStyle" value="Magic">Magic<br>
   <input type="radio" name="passwordStyle" value="Secret">Secret Agent<br>
   <input type="radio" name="passwordStyle" value="Random">Random <br>
    <input type='submit' value='Generate Your Password'><br>

<pre>
    

<?php echo $foo; ?>



</pre>

</form>

</body>
</html>
