<?php
$title = "Modification d'un ingrédient";
include 'header.php'; ?>

<form action="" method="post">

    <input type="text" name="item_name" value="<?= $ingredient->getItem_name()?>">
    <br>
    <input type="text" name="quantity" value="<?= $ingredient->getQuantity()?>">
    <br>
    <input type="text" name="category" value="<?= $ingredient->getCategory()?>">
    <br>
    <button type="submit">Modifier</button>

</form>
<?php
include 'footer.php' ?>