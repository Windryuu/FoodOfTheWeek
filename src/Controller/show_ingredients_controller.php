<?php

include "../../vendor/autoload.php";

use dao\IngredientDao;
use model\Ingredient;

try {
    $ingDao = new IngredientDao();
    $listIngredients = $ingDao->getAllIngredient();
    include "../View/display_ingredients.php";
} catch (PDOException $e) {
    echo $e->getMessage();
}