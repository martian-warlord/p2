<?php 

//field declarations and initial valies set.

$pazzwerd = "";
$happybucket = "";
$luckynumber = 1;


$affirmations = array("Happy", "Beautiful", "Wonderful", "Lucky", "Fantastic", 
		"Loved", "Deliscious", "Awesome", "Strong", "Sexy", "Fierce", "Powerful", "Free", "Joyful", 
		"Peaceful", "Successful", "Relaxed", "Confident", "Grounded", "Winning", "SuperDuper", "Valuable", 
		"Growing", "Healthy", "Attractive", "Energized", "Healthy");

$fancytime = array("*", "@", "#", "^");


//initial loop to randomly pull strings from an array and concatenate them.  

//        for ($i=0; $i<=1; $i++)
//        {
//            $pickacard = array_rand($affirmations);                       
//            $happybucket .= $affirmations[$pickacard];                        
//        }
//        $pazzwerd = "Iam". $happybucket .  "and" ; 

//        $pickacard = array_rand($affirmations);                       
//        $pazzwerd .= $affirmations[$pickacard]; 

//non-looped

        shuffle($affirmations);

		$bucket2 = array_rand($affirmations, 3);

        $pazzwerd = "Iam". $affirmations[$bucket2[0]] . $affirmations[$bucket2[1]] . "and" . $affirmations[$bucket2[2]]; 





// If checkboxes are checked: joke 1, joke 2, or make fancy password design.
		
		if ( isset($_POST["magicnumber"]) &&  isset($_POST ["symbol"])) {if ($_POST["magicnumber"] == "true" && $_POST ["symbol"] == "true") {
		$pazzwerd .= "24-7-365!"; } }

		else if ( isset($_POST["magicnumber"])) {if ($_POST["magicnumber"] == "true" ) {
		$pazzwerd .= "007"; }} // this is a joke

		else if ( isset($_POST["symbol"]))  {if ($_POST["symbol"]== "true" ) {
		$pazzwerd .= "!";}} //this is also a joke

		else if ( isset($_POST["style2"]))  {if ($_POST["style2"]== "true" ) {

			$luckynumber = rand(1,10); //random number added to front and end

			$whim = array_rand($fancytime);
			$decor = $fancytime[$whim];

		    $pickacard = array_rand($affirmations);                       
            $powerwordOne = strtoupper($affirmations[$pickacard]); //all caps

		    $pickacard = array_rand($affirmations);                       
            $powerwordTwo = strtoupper($affirmations[$pickacard]);


			$pazzwerd = $luckynumber; 
		                          
            $pazzwerd .= implode($decor ,str_split($powerwordOne)); // string cast as an array and then imploded w decorative spacer

			$pazzwerd .= $luckynumber;
	}}



//the browser seemed to be holding onto old values for the checkboxes.  What are best practices around this? "isset" helped and re-initializing values to false may have helped.  

$_POST["symbol"]= "false";
$_POST["magicnumber"] = "false";
$_POST["style2"] = "false";

