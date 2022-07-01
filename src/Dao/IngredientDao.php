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

    public function getAllIngredient(){
        $req = $this->pdo->prepare("SELECT * FROM ingredient");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);

        //foreach($result as $key => $ing){
        //    $result[$key] = (new Ingredient())
        //        ->setId_ingredient($ing[""])
        //        ->setItem_name()
        //        ->setQuantity()
        //        ->setCategory()
        //}
        return $result;
    }

    function getIngredientById(int $id): ?Ingredient
    {
        $req = $this->pdo->prepare("SELECT * FROM ingredient WHERE id_ingredient = :id_ingredient");
        $req->execute([":id_ingredient"=>$id]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        
        if(!empty($result)){
            return (new Ingredient())
            ->setId_ingredient($result["id_ingredient"])
            ->setItem_name($result["item_name"])
            ->setQuantity($result["quantity"])
            ->setCategory($result["category"]);
        } else {
            return null;
        }
    }

    public function updateIngredient(Ingredient $ingredient){
        $req = $this->pdo->prepare("UPDATE `ingredient` SET `item_name` = (:item_name), `quantity` = (:quantity), `category` = (:category)
                                    WHERE `ingredient`.`id_ingredient` = :id");
        $req->execute([
            ":item_name" =>$ingredient->getItem_name(),
            ":quantity"=>$ingredient->getQuantity(),
            ":category"=>$ingredient->getCategory(),
            ":id"=>$ingredient->getId_ingredient()
        ]);
    }
}

?>