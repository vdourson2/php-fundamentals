<!--//Fake Excuse Notes Generator-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuses generator</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.png">
    <link rel="stylesheet" href="./assets/style.css"/>
</head>
<body>
    <h1>Fake excuses generator</h1>
    <form method="get" action="">
        <label for="name">Name your child:</label>
        <input type="text" id="name" name="name"><br>

        <label for="gender">Gender of your child:</label>
        <select id="gender" name="gender">
            <option value="girl">Girl</option>
            <option value="boy">Boy</option>
        </select><br>

        <label for="teacher">Name of the teacher:</label>
        <input type="text" id="teacher" name="teacher"><br>

        <label>Reason for absence:</label><br>
        <input type="radio" id="illness" name="reason" value="illness">
        <label for="illness">Illness</label>

        <input type="radio" id="death" name="reason" value="death">
        <label for="death">Death of a pet</label>

        <input type="radio" id="activity" name="reason" value="activity">
        <label for="activity">Extra-curricular activity</label>

        <input type="radio" id="travel" name="reason" value="travel">
        <label for="travel">School travel</label>

        <input type="submit" name="submit" value="Submit" id="submit">

    </form> 

<?php
if(isset($_GET['name'],$_GET['gender'],$_GET['teacher'],$_GET['reason'])){
    $pronounPers = ($_GET['gender'] == "girl") ? "she" : "he";
    $pronounPoss = ($_GET['gender'] == "girl") ? "her" : "his";
    $child = ($_GET['gender'] == "girl") ? "my daughter" : "my son";
    $reason = [
        "illness" => "is ill",
        "death" => "lost {$pronounPoss} cat this night",
        "activity" => "has a selection for the Olimpic Games",
        "travel" => "our flight back from holidays yesterday had a delay."
    ];
    $dateDay = date('l');
    $dateDate = date('d F Y');
    
    echo "<div class=\"letter\">
            <p id=\"date\">{$dateDay}, the {$dateDate}</p>
            <h2>Dear {$_GET['teacher']},</h2>
            <p>Please excuse {$child} {$_GET['name']} for being absent today because {$pronounPers} {$reason[$_GET['reason']]}.</p>
            <p>Hoping for your kind consideration.</p>
            <p> Respectfully yours,</p>
            <p id=\"signature\">M. Dumarais.</p>
          </div>
          </body>";
    
}
?>




                
                            