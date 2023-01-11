<?php 
class Product{
    private $image;
    private $name;
    private $price;
    private $category;

    public function setImage($_image){
        $this->image=$_image;
    }
    public function getImage(){
        return $this->image;
    }
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
    public function __construct(string $_image,string $_name,float $_price,Category $_category)
    {   
        $this->setImage($_image);
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategory($_category);
    }
}