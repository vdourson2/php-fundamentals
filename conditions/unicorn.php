<form method="get" action="">
    <fieldset>
        <legend>What are you?</legend>
        <input type="radio" value="cat" name="what" id="cat"/>
        <label for="cat">a cat</label><br>
        <input type="radio" value="human" name="what" id="human" />
        <label for="human">a human</label><br>
        <input type="radio" value="unicorn" name="what" id="unicorn" />
        <label for="unicorn">a unicorn</label><br>
    </fieldset>
    <input type="submit" name="submit" value="Submit">
</form>
<?php  
if (isset($_GET['what'])){
    $what = $_GET['what'];
    $imgCat = '<img src="cat.gif" alt="gif of a cat">';
    $imgHuman = '<img src="https://media.giphy.com/media/l3nWflasE5VWXHdRu/giphy.gif" alt="gif of a human">';
    $imgLicorn = '<img src="https://media.giphy.com/media/j0kQJxo5mzGYb4EvWK/giphy.gif" alt="gif of a licorn">';
    $image = ($what == 'cat') ? $imgCat : (($what == 'human') ? $imgHuman : $imgLicorn);
    echo $image;
}
?>


