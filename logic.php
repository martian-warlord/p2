<?php 


$foo = "";
$happybucket = "";
$coinflip = 1;
$who = "";
$hoodoo = "";
$juju = "";




if ($_POST["passwordStyle"] == "Affirmation"){ 
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

} 
else if ($_POST["passwordStyle"] == "Magic"){ 

$authority = array("ByJupiter", "AlmightyIsis", "OMuses");
$magicWords = array("Alagazam", "HocusPocus","Shazam","SimSalaBim","Abracadabra","AlagazamAlagazamAlagazam");
$open = array("ICommandTheeOpen","OpenSesame");

$foo = "Your secret password is: ";

            $who = array_rand($authority);                       
            $foo .= $authority[$who]; 
$foo .= "HearMyCall";

            $hoodoo = array_rand($magicWords);                       
            $foo .= $magicWords[$hoodoo]; 

            $juju = array_rand($open);                       
            $foo .= $open[$juju]; 

$foo .= "Obey!";

} 
else if ($_POST["passwordStyle"] == "Secret"){ $foo = "Your secret password is: " . "doo!";} 
else if ($_POST["passwordStyle"] == "Random"){ $foo = "Your secret password is: " . "oops!";} 









// INTERJECTIONS - Yummy, Gimme, 



// VERBS - Love, Hate, Crave, See, Want, 

//FOOD - Beans, Tacos, Rice, Fries, Sushi, Spam, Burgers, Apples, Cheese, DirtyFeet, Feta, Cheddar, Butter, Gouda, Biscuit, Steak, Ham, Bacon, Cookies, Brownies, Liver, Turkey, Beef, Noodles, Bagels, Bread, Beer, Vodka, Rum, Oats, Lard, 

// COLOR - Red, Blue, Green, Pink, Gold, Purple, Orange, Baby

//ANIMAL - Dog, Cat, Fish, Bird, Panda, Duck, Bunny, Monkey

