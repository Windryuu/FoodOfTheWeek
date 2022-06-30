<?php

namespace model;

class Ingredient
{
    private int $id_ingredient;
    private string $item_name;
    private int $quantity;
    private string $category;

    public function __construct()
    {
        
    }

    /**
     * Get the value of id_ingredient
     */ 
    public function getId_ingredient()
    {
        return $this->id_ingredient;
    }

    /**
     * Set the value of id_ingredient
     *
     * @return  self
     */ 
    public function setId_ingredient($id_ingredient)
    {
        $this->id_ingredient = $id_ingredient;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of item_name
     */ 
    public function getItem_name()
    {
        return $this->item_name;
    }

    /**
     * Set the value of item_name
     *
     * @return  self
     */ 
    public function setItem_name($item_name)
    {
        $this->item_name = $item_name;

        return $this;
    }
}

?>