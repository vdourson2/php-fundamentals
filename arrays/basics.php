<?php 
// Create an array representing your family members
$family = ['Toto','Tata','Titi','Tutus'];

// Display its content using the print_r function
print_r($family);
echo '<pre>';
print_r($family);
echo '</pre>';

// Create an array describing your favourite recipes
$recipes = ['Moussaka','Sushis','Chocolate cake','Lemon pie'];

// Display its content using the print_r
echo '<pre>';
print_r($recipes);
echo '</pre>';

// Then, create an array listing your favourite films
$films = ['Stroumpf1','Stroumpf2','Stroumpf3','Stroumpf4'];

// Using that array, display only the one film you like best using its index
echo $films[0];
echo'<br>';

//var_dump() will add more information
var_dump($family);

//Describe yourself using an associative array: $me. 
//Specify your age, your favourite season of the year, wether you like soccer or not (boolean). 
//Try to use the right variable type for each value.
$me = [
    "firstname" => 'Tata',
    "lastname" => 'Dupond',
    "age" => 86,
    "season" => 'winter',
    'soccer' => false,
];
echo '<pre>';
print_r($me);
echo '</pre>';

//Add your hobbies using an array to your $me array
$me['hobbies'] = ['walking','running','jumping','climbing','swimming'];

//Create a second array with the same keys as yours, to describe your mother : 
//the $mother array (make it someone else if you prefer).
//Make sure to also describe her hobbies
$cat = [
    "firstname" => 'Lulu',
    "age" => 2,
    "season" => 'spring',
    'soccer' => true,
    'hobbies' => ['sleeping', 'eating', 'miaouing']
];

//Assign the $mother array to a new key in your $me array : let's call that key 'mother'.
$me['cat'] = $cat;

//check the content of $me using print_r(). (wrap it inside a <pre> html tag to make it more legible ). 
//It should show a multi-dimensional array, where the mother array are values of your mother key.
echo '<pre>';
print_r($me);
echo '</pre>';
var_dump($me);
echo '<br><br>';

// you want to know how many hobbies your mother has
echo 'My cat has ' . count($me['cat']['hobbies']) . ' hobbies';
echo '<br>';

//Count your own hobbies
echo 'I have ' . count($me['hobbies']) . ' hobbies';
echo '<br>';

//Add both totals and display the total amount of hobbies.
echo 'We have ' . (count($me['cat']['hobbies']) + count($me['hobbies'])) . ' hobbies';

//A friend introduced you to the joys of Taxidermy : it quickly becomes your new hobby. 
//Add that new hobby to your array's 'hobbies' key
$me['hobbies'][] = 'taxidermy';

//You decide you need a reset and change your last name to Durand
$me['lastname'] = 'Durand';
echo '<pre>';
print_r($me);
echo '</pre>';

//One day, you meet your $soulmate. Describe your soulmate as an array, with the same keys as yours.
$soulmate = [
    "firstname" => 'Rara',
    "lastname" => 'Dumarais',
    "age" => 92,
    "season" => 'summer',
    'soccer' => false,
    'hobbies' => ['knitting','sewing','crochet','climbing'],
];

$array_intersect = array_intersect($me['hobbies'],$soulmate['hobbies']);
$array_merge = array_merge($me['hobbies'],$soulmate['hobbies']);
$array_add = $me['hobbies'] + $soulmate['hobbies'];
print_r($array_intersect);
echo '<br>';
print_r($array_merge);
echo '<br>';
print_r($array_add);

//MORE ARRAY EXERCICES
//Create an array $web_development containing a 'frontend' and a 'backend' key. Assign an empty array to each key.
$web_development = [
    'frontend' => [],
    'backend' => []
];

// Then, add a line underneath that pushes 'xhtml' in the right array.
$web_development['frontend'][] = 'xhtml';

// Then, add a line underneath that pushes 'Ruby on Rails' in the right array.
$web_development['backend'][] = 'Ruby on Rails';

// Then, add a line underneath that pushes 'CSS' in the right array.
$web_development['frontend'][] = 'CSS';

// Then, add a line underneath that pushes 'Flash' in the right array.
$web_development['backend'][] = 'Flash';

// Then, add a line underneath that pushes 'JavaScript' in the right array.
$web_development['frontend'][] = 'Javascript';
echo '<pre>';
print_r($web_development);
echo '</pre>';

// Then, add a line underneath that replace 'xhtml' by 'html'.
$web_development['frontend'][array_search('xhtml',$web_development['frontend'])] = 'html';
echo '<pre>';
print_r($web_development);
echo '</pre>';

// Then, add a line underneath that removes 'Flash' from the array.
array_splice($web_development['backend'], array_search('Flash',$web_development['backend']),1);
echo '<pre>';
print_r($web_development);
echo '</pre>';

?>