<?php
declare(strict_types=1);


// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise starts $x here:<br/>";
    echo $block;

}


new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;


new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);




new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);

}
print_r($week);






new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; count($arr) <= 25; $letter++) {
    array_push($arr, $letter);

}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array


new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
// $arr = [];

echo "Here is the name: ";

function combineNames($str1 = "", $str2 = "") {
    $params = [$str1 = "", $str2 = ""];
    foreach($params as $param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    
}


// function randomGenerate($arr, $amount) {
//     for ($i = $amount; $i > 0; $i--) {
//         array_push($arr, randomHeroName());
//     }

//     return $amount;
// }
$counter = 0;
$parames = [];
function randomHeroName()
{
    global $parames;
    global $counter;
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[$counter][rand(0, 10)];
    $counter++;
    array_push($parames, $randname);
    if (count($parames) == 2){
        echo implode(" - ", $parames);
    }
}
combineNames();


new_exercise(7);
function copyright($year) {
    // date_default_timezone_set('UTC');

    return "&copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y'));

new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    }
    return 'No access';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
// echo login('john@example.be', 'dfgidfgdfg');
//no access
// echo login('wrong@example.be', 'wrong');
//you can change things again!

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) == true) {
            return 'Unacceptable Found <br/>';
        } 
    }
    return 'Acceptable <br/>';
}
//invalid link
echo isLinkValid(' http://www.google.com/hack.pdf ');
//invalid link
echo isLinkValid(' https://google.com ');
//VALID link
echo isLinkValid(' http://google.com ');
//VALID link
echo isLinkValid(' http://google.com/test.txt ');


new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
global $areTheseFruits;
foreach($areTheseFruits as &$items){
    if(!in_array($items, $validFruits) == true) {
        $key = array_search($items, $areTheseFruits);
        unset($areTheseFruits[$key]);
    };
    foreach($validFruits as &$frutis){
        if(!in_array($frutis, $areTheseFruits)) {
            $key = array_search($frutis, $validFruits);
            array_push($areTheseFruits, $validFruits[$key]);
        }
    }

}
var_dump($areTheseFruits);//do not change this ?>
