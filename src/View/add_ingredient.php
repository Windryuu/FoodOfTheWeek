<?php
$title = "Création d'un nouvel ingrédient";
include 'header.php';

if(!empty($error)){
    foreach($error as $e){
        echo $e;
        echo "<br>";
    }
}

?>
<form action="" method="post">
    <input type="text" name="item_name" id="item_name">
    <br>
    <input type="number" name="quantity" id="quantity">
    <br>
    <input type="text" name="category" id="category">
    <br>
    <button type="submit">Complete</button>
</form>