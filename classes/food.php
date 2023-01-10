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
    public function __construct(array $_ingredients, string $_expirationDate)
    {
        $this->setIngredients($_ingredients);
        $this->setExpirationDate($_expirationDate);
    }
}