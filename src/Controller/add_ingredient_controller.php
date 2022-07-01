<?php

include "../../vendor/autoload.php";

use dao\IngredientDao;
use model\Ingredient;

if(empty($_POST)){
    include "../View/add_ingredient.php";
} else {
    $args = [
        "item_name" => [],
        "quantity" => [],
        "category" => []
    ];

    $signup_post = filter_input_array(INPUT_POST,$args);

    if($signup_post["item_name"] === false) {
        $error_messages[] = "Bad item name";
    }

    if($signup_post["quantity"] === false) {
        $error_messages[] = "Bad item name";
    }

    if($signup_post["category"] === false) {
        $error_messages[] = "Bad item name";
    }

    if(empty($error_messages)){
        $new_ingredient = new Ingredient();
        $ing = $new_ingredient
            ->setItem_name($signup_post["item_name"])
            ->setQuantity($signup_post["quantity"])
            ->setCategory($signup_post["category"]);

        try {
            $ingredientDao = new IngredientDao();
            $ingredientDao->addIngredient($new_ingredient);
            
            header("Location: index.php");
            exit;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        include "../View/index.php";
    }
}