<!-- EXERCISE 1 -->
<!-- Store your first name in a variable, then display its value (echo) in a <p> html tag -->
<?php $name = "Toto"; ?>
<p>My name is <?php echo $name; ?></p>


<!-- Another way : -->
<?php 
    echo "<p>My name is $name</p>";
?>

<!-- EXERCISE 2 -->
<!-- Add another variable to contain your age, then display it in a second <p> tag -->
<?php 
    $age = 16;
    echo "<p>I am $age years old</p>"
?>

<!-- EXERCISE 3 -->
<!-- Add yet another variable that describes the colour of your eyes, then display it in another <p> tag -->
<?php 
    $color = "yellow" ;
    echo "<p>My eyes are $color.</p>"
?>  

<!-- EXERCISE 4 -->
<!-- Add yet another variable that contains the name of all the people in your family. 
Display the value stored at the first index in another <p> tag-->
<?php 
    $family = array('Toto','Titi','Tutu','Tata');
    echo "<p>The first person in my family is $family.</p>"
?>




