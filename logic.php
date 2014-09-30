<?php 


$foo = "";
$happybucket = "";
$luckynumber = 1;


$affirmations = array("Happy", "Beautiful", "Wonderful", "Lucky", "Fantastic", 
		"Loved", "Deliscious", "Awesome", "Strong", "Sexy", "Fierce", "Powerful", "Free", "Joyful", 
		"Peaceful", "Successful", "Relaxed", "Confident", "Grounded", "Winning", "SuperDuper", "Valuable", 
		"Growing", "Healthy", "Attractive", "Energized", "Healthy");

$fancytime = array("*", "@", "#", "^");


        for ($i=0; $i<=1; $i++)
        {
            $pickacard = array_rand($affirmations);                       
            $happybucket .= $affirmations[$pickacard];                        
        }
        $foo = "Iam". $happybucket .  "and" ; 

            $pickacard = array_rand($affirmations);                       
            $foo .= $affirmations[$pickacard]; 
		
		if ( isset($_POST["magicnumber"]) &&  isset($_POST ["symbol"])) {if ($_POST["magicnumber"] == "true" && $_POST ["symbol"] == "true") {
		$foo .= "24-7-365!"; } }

		else if ( isset($_POST["magicnumber"])) {if ($_POST["magicnumber"] == "true" ) {
		$foo .= "007"; }}

		else if ( isset($_POST["symbol"]))  {if ($_POST["symbol"]== "true" ) {
		$foo .= "!";}}

		else if ( isset($_POST["style2"]))  {if ($_POST["style2"]== "true" ) {

			$luckynumber = rand(1,10);

			$whim = array_rand($fancytime);
			$decor = $fancytime[$whim];

		    $pickacard = array_rand($affirmations);                       
            $powerwordOne = strtoupper($affirmations[$pickacard]); 

		    $pickacard = array_rand($affirmations);                       
            $powerwordTwo = strtoupper($affirmations[$pickacard]);


			$foo = $luckynumber; 
		                          
            $foo .= implode($decor ,str_split($powerwordOne)); 

			$foo .= $luckynumber;
	}}





$_POST["symbol"]= "false";
$_POST["magicnumber"] = "false";
$_POST["style2"] = "false";

