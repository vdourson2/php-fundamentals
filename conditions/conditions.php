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

// 2. "Different greetings according to time" Exercise

// If the time is between 05h00 and 09h00, display "Good morning !".
// If the time is between 09h01 and 12h00, display "Good day !".
// If the time is between 12h01 and 16h00, display "Good afternoon !".
// If the time is between 16h01 and 21h00, display "Good evening !".
// If the time is between 21h01 and 04h59, display "Good night !".


$now = getdate();

var_dump($now);

//Test the value of $now and display the right message according to the specifications.
if( $now["hours"]>=5 AND  $now["hours"]<=9){
    echo "<br>Good morning !";
} else if( $now["hours"]>9 AND  $now["hours"]<=12) {
    echo "<br>Good day !";
} else if( $now["hours"]>12 AND  $now["hours"]<=16){
    echo "<br>Good afternoon !";
} else if( $now["hours"]>16 AND  $now["hours"]<=21){
    echo "<br>Good evening !";
} else {
    echo "<br>Good night!";
}

?>