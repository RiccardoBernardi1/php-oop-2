<?php 
class Product{
    private $name;
    private $price;
    private $category;

    public function setName($_name){
        $this->name=$_name;
    }
    public function setPrice($_price){
        $this->price=$_price;
    }
    public function setCategory($_category){
        $this->category=$_category;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getCategory(){
        return $this->category;
    }
    public function __construct(string $_name,float $_price,object $_category)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategory($_category);
    }
}