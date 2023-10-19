<?php 
// Series of exercises on PHP conditional structures.


// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
echo"<br>";

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate" ];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == $possible_states[0] ){
	echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[1] ){
	echo "<br>Yuk, Room is filthy : let's clean it up !";
}else if( $room_filthiness == $possible_states[2] ){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
}else if( $room_filthiness == $possible_states[3] ){
	echo "<br>Yuk, Room is clean : well done !";
}else {
	echo "<br>Too clean : let it be!";
}
echo"<br><br>";

// 2. "Different greetings according to time" Exercise

// If the time is between 05h00 and 09h00, display "Good morning !".
// If the time is between 09h01 and 12h00, display "Good day !".
// If the time is between 12h01 and 16h00, display "Good afternoon !".
// If the time is between 16h01 and 21h00, display "Good evening !".
// If the time is between 21h01 and 04h59, display "Good night !".


$time = date('Gi');
$now = getdate();
echo $now['hours'] ."h". $now['minutes'];
//Test the value of $now and display the right message according to the specifications.
if( $time>=500 AND  $time<=900){
    echo "<br>Good morning !";
} else if( $time>900 AND  $time<=1200) {
    echo "<br>Good day !";
} else if( $time>1200 AND  $time<=1600){
    echo "<br>Good afternoon !";
} else if( $time>1600 AND  $time<=2100){
    echo "<br>Good evening !";
} else {
    echo "<br>Good night!";
};
echo"<br><br>";

// 3. "Different greetings according to age, gender, mothertongue" Exercise

?>
<form method="get" action="">
    <label for="age">Your age :</label>
	<input type="number" name="age"><br>
    <fieldset>
        <legend>Gender</legend>
        <input type="radio" value="man" name="gender" id="man"/>
        <label for="man">Man</label><br>
        <input type="radio" value="woman" name="gender" id="woman" />
        <label for="woman">Woman</label><br>
    </fieldset>
    <fieldset>
        <legend>Do you speak English?</legend>
        <input type="radio" value="yes" name="english" id="yes"/>
        <label for="yes">yes</label><br>
        <input type="radio" value="no" name="english" id="no" />
        <label for="no">no</label><br>
    </fieldset>
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php 
if (isset($_GET['age'],$_GET['gender'],$_GET['english'])){
    // Form processing
    if ($_GET['age'] < 12){
        if ($_GET['gender'] == "man"){
            if ($_GET['english'] == "yes"){
                echo "Hello boy";
            } else {
                echo "Aloha boy";
            }
            
        } else {
            if ($_GET['english'] == "yes"){
                echo "Hello girl";
            } else {
                echo "Aloha girl";
            }
        }
    } else if ($_GET['age'] < 18){
        if ($_GET['gender'] == "man"){
            echo "Hello mister teenager";
        } else {
            echo "Hello miss teenager";
        }
    } else if ($_GET['age'] < 115){
        if ($_GET['gender'] == "man"){
            echo "Hello mister";
        } else {
            echo "Hello madam";
        }
    } else {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    } 
}
echo "<br>";

// 6. "The Girl Soccer team" Exercise
?>
<h1>Subscribe to the soccer team :</h1>
<form method="get" action="">
    <label for="age">Your age :</label>
	<input type="number" name="age" id="age"><br>
    <fieldset>
        <legend>Gender</legend>
        <input type="radio" value="man" name="gender" id="man"/>
        <label for="man">Man</label><br>
        <input type="radio" value="woman" name="gender" id="woman" />
        <label for="woman">Woman</label><br>
    </fieldset>
    <label for="name">Your name :</label>
    <input type="text" name="name" id="name">
	<input type="submit" name="submit" value="Subscribe">
</form>

<?php 
    $answer = "Sorry you don't fit the criteria, ";
    if (isset($_GET['age'],$_GET['gender'],$_GET['name'])){
        if ($_GET['age']>=21 AND $_GET['age']<40 AND $_GET['gender']=="woman"){
            $answer = "Welcome to the team ,";
        } 
        echo $answer, $_GET['name'];  
    }
    echo "<br><br>";


// 8. "School sucks!" Exercise
?>

<form method="get" action="">
    <label for="note">Note : </label>
	<input type="number" name="note" id="note">
	<input type="submit" name="submit" value="submit">
</form>

<?php

if (isset($_GET['note'],)){
    $note = $_GET['note'];
    if ($note < 4) {
        echo "This work is really bad. What a dumb kid! ";
    } else if ($note>=4 AND $note<10){
        echo "This is not sufficient. More studying is required.";
    } else if ($note == 10){
        echo "barely enough!";
    } else if ($note > 10 AND $note<15){
        echo "Not bad!";
    } else if ($note >= 15 AND $note<=18){
        echo "Bravo, bravissimo!";
    } else if ($note>=19 AND $note<=20){
        echo "Too good to be true : confront the cheater!";
    }
}


