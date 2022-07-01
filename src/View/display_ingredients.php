<?php
$title = "affiche tous les ingrédients";
include 'header.php';

?>
    
    <table>
        <thead>
            <tr>
                <th>Id ingredient</th>
                <th>Ingredient</th>
                <th>Quantity</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($listIngredients as $ingredient) : ?>
            <tr>
                <th><?= $ingredient["id_ingredient"] ?></th>
                <th><?= $ingredient["item_name"] ?></th>
                <th><?= $ingredient["quantity"] ?></th>
                <th><?= $ingredient["category"] ?></th>
                <th><a href="../Controller/modify_ingredients_controller.php?id=<?= $ingredient["id_ingredient"]?>"><button id="btn-update">Modifier</button></a></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php
include 'footer.php';?>