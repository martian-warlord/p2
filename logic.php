<?php 


$foo = "";
$happybucket = "";

$magicWords = [
    "magic1" => "Alagazam",
    "magic2" => "HocusPocus",
    "magic3" => "Shazam",
    "magic4" => "SimSalaBim",
    "magic5" => "Abracadabra",
    "magic6" => "AlagazamAlagazamAlagazam"
];

$open = [
 "open1" => "ICommandTheeOpen",
 "open2" => "OpenSesame"
];


if ($_POST["passwordStyle"] == "Affirmation"){ $foo = "Your secret password is: " . "no!";} 
else if ($_POST["passwordStyle"] == "Magic"){ $foo = "Your secret password is: " . "goos!";} 
else if ($_POST["passwordStyle"] == "Secret"){ $foo = "Your secret password is: " . "doo!";} 
else if ($_POST["passwordStyle"] == "Random"){ $foo = "Your secret password is: " . "oops!";} 


$magicWords = [
    "magic1" => "Alagazam",
    "magic2" => "HocusPocus",
    "magic3" => "Shazam",
    "magic4" => "SimSalaBim",
    "magic5" => "Abracadabra",
    "magic6" => "AlagazamAlagazamAlagazam"
];
$rand_keys = array_rand($magicWords, 5);
echo $magicWords[$rand_keys[4]];



$affirmations = array("Happy", "Beautiful", "Wonderful", "Lucky", "Loved", "Awesome", "Strong", "Free", "Joyful", "Peaceful", "Successful", "Relaxed", "Confident", "Grounded", "Valuable", "Growing", "Healthy", "Attractive", "Energized", "Healthy");
        for ($i=0; $i<=3; $i++)
        {
            $pickacard = array_rand($affirmations);
                        //this generates the random number from the array
            $happybucket .= $affirmations[$pickacard];
                        //here we will display the exact charachter from the array
        }
        echo "Iam". $happybucket; // printing result


// INTERJECTIONS - Yummy, Gimme, 



// VERBS - Love, Hate, Crave, See, Want, 

//FOOD - Beans, Tacos, Rice, Fries, Sushi, Spam, Burgers, Apples, Cheese, DirtyFeet, Feta, Cheddar, Butter, Gouda, Biscuit, Steak, Ham, Bacon, Cookies, Brownies, Liver, Turkey, Beef, Noodles, Bagels, Bread, Beer, Vodka, Rum, Oats, Lard, 

// COLOR - Red, Blue, Green, Pink, Gold, Purple, Orange, Baby

//ANIMAL - Dog, Cat, Fish, Bird, Panda, Duck, Bunny, Monkey

