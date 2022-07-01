<?php

include "../../vendor/autoload.php";

use dao\IngredientDao;
use model\Ingredient;

$id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
try {
    $ingDao = new IngredientDao();
    $ingredient = $ingDao->getIngredientById($id);
    
} catch(PDOException $e) {
    echo $e->getMessage();
}

///

$item_name = filter_input(INPUT_POST, "item_name");
$quantity = filter_input(INPUT_POST,"quantity");
$category = filter_input(INPUT_POST,"category");
// 
// if(isset($item_name)&&isset($quantity)&&isset($category)){
    // 
// }

//if($signup_post["item_name"] === false) {
//    $error_messages[] = "Bad item name";
//}
//
//if($signup_post["quantity"] === false) {
//    $error_messages[] = "Bad item name";
//}
//
//if($signup_post["category"] === false) {
//    $error_messages[] = "Bad item name";
//}

var_dump($_POST);

if(!(isset($item_name))){
    include "../View/modify_ingredient.php";
} else {

    $modified_ingredient = new Ingredient();
    $ing = $modified_ingredient
            ->setId_ingredient($id)
            ->setItem_name($item_name)
            ->setQuantity($quantity)
            ->setCategory($category);

    try{
        $ingDao->updateIngredient($modified_ingredient);
        header("Location: index.php");
        exit;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}