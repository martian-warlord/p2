<?php 


$foo = "";
$happybucket = "";





$affirmations = array("Happy", "Beautiful", "Wonderful", "Lucky", "Fantastic", 
		"Loved", "Deliscious", "Awesome", "Strong", "Sexy", "Fierce", "Powerful", "Free", "Joyful", 
		"Peaceful", "Successful", "Relaxed", "Confident", "Grounded", "Winning", "SuperDuper", "Valuable", 
		"Growing", "Healthy", "Attractive", "Energized", "Healthy");
        for ($i=0; $i<=1; $i++)
        {
            $pickacard = array_rand($affirmations);                       
            $happybucket .= $affirmations[$pickacard];                        
        }
        $foo = "Your secret password is: " . "Iam". $happybucket .  "and" ; 

            $pickacard = array_rand($affirmations);                       
            $foo .= $affirmations[$pickacard]; 
		
		if ( isset($_POST["magicnumber"]) &&  isset($_POST ["symbol"])) {if ($_POST["magicnumber"] == "true" && $_POST ["symbol"] == "true") {
		$foo .= "24-7-365!"; } }

		else if ( isset($_POST["magicnumber"])) {if ($_POST["magicnumber"] == "true" ) {
		$foo .= "007"; }}

		else if ( isset($_POST["symbol"]))  {if ($_POST["symbol"]== "true" ) {
		$foo .= "!";}}

$_POST["symbol"]= "false";
$_POST["magicnumber"] = "false";


