<?php

namespace dao;

use PDO;
use model\Ingredient;

class IngredientDao
{
    private PDO $pdo;

    public function __construct()
    {
        $conf = [
            "dsn" => "mysql:host=localhost;dbname=fotw;charset=UTF8",
            "user" => "root",
            "password" => ""
        ];
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $this->pdo = new PDO(
            $conf["dsn"],
            $conf["user"],
            $conf["password"],
            $options
        );
    }

    public function addIngredient(Ingredient $ingredient)
    {
        $req = $this->pdo->prepare("INSERT INTO ingredient (item_name, quantity, category) VALUES (:item_name, :quantity, :category)");
        $req->execute([
            ":item_name" => $ingredient->getItem_name(),
            ":quantity" => $ingredient->getQuantity(),
            ":category" => $ingredient->getCategory()
        ]);
    }
}

?>