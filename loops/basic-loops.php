
<?php  
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

//Using foreach, build a loop that displays each element of the array
//Then, modify your loop so as to conjugate the verb "to code" in the present tense. 
//Use a <br> to go to the next line.

foreach ($pronouns as $key => $pronoun){
    $end = ($key == 2) ? "s" : "";
    echo "{$pronoun} code{$end} <br>";
}

// Write a script that prints the numbers from 1 to 120 using  while 
$number = 1;
while ($number < 121) {
    echo "{$number} <br>" ;
    $number++;
}

// Write a script that prints the numbers from 1 to 120 using  for 
for ($i = 1; $i<121; $i++){
    echo "{$i}<br>";
}

// Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.
$names = ['a','b','c','d','e','f'];
foreach ($names as $name){
    echo $name;
    echo '<br>';
}

//Create an array containing at least 10 countries. 
//Then, generate the html that will render a select box inside an html form (see mockup below). 
$countries = ['France','Belgium','Italy','Switzerland','Germany','Luxemburg','Spain','Denmark','Norway','Sweden'];
echo "<select name=\"country\">";
foreach ($countries as $country){
    $lowerCountry = strtolower($country);
    echo "<option value=\"{$lowerCountry}\">{$country}</option>";
}
echo "</select><br>";

// Edit your array so that it becomes an associative array: use the country ISO code as array key, and the country name as value.
$countries = ['FR'=>'France','BE'=>'Belgium','IT'=>'Italy','CH'=>'Switzerland','DE'=>'Germany','LU'=>'Luxemburg','ES'=>'Spain','DK'=>'Denmark','NO'=>'Norway','SE'=>'Sweden'];

// Adapt your html select box so that the country ISO code becomes the <option> element value, and the country name be the visible part of the <option>.
echo "<select name=\"countryISO\">";
foreach ($countries as $key => $country){
    echo "<option value=\"{$key}\">{$country}</option>";
}
echo "</select>";
?>