<?php
require_once __DIR__."/product.php";
class Food extends Product{
    private $ingredients;
    private $expirationDate;

    public function setIngredients($_ingredients){
        $this->ingredients=$_ingredients;
    }
    public function setExpirationDate($_expirationDate){
        $this->expirationDate=$_expirationDate;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
    public function getExpirationDate(){
        return $this->expirationDate;
    }
    public function __construct(string $_image,string $_name,float $_price,Category $_category,array $_ingredients, string $_expirationDate)
    {
        parent::__construct($_image,$_name,$_price,$_category);
        $this->setIngredients($_ingredients);
        $this->setExpirationDate($_expirationDate);
    }
}