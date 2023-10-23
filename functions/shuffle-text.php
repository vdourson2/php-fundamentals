<?php 
$text = 'According to a researcher at Cambridge University, it doesn\'t matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.';
$words = explode(' ',$text);
//print_r($words);
foreach ($words as $index => $word){
    $words[$index] = substr_replace($word,str_shuffle(substr($word,1,-1)),1,-1);
}
echo implode(" ",$words);

?>