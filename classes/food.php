<?php
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
    public function __construct(string $_name,float $_price,array $_category,array $_ingredients, string $_expirationDate)
    {
        parent::__construct($_name,$_price,$_category);
        $this->setIngredients($_ingredients);
        $this->setExpirationDate($_expirationDate);
    }
}