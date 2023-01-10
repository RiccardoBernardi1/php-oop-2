<?php
class Category{
    private $category;
    private $icon;

    public function setCategory($_category){
        $this->category=$_category;
    }
    public function setIcon($_icon){
        $this->icon=$_icon;
    }
    public function getCategory(){
        $this->category;
    }
    public function getIcon(){
        $this->icon;
    }
    public function __construct(string $_category,string $_icon)
    {
        $this->setCategory($_category);
        $this->setIcon($_icon);
    }
}