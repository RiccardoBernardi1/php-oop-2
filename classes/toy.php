<?php
class Toy extends Product{
    private $materials;

    public function setMaterials($_materials){
        $this->materials=$_materials;
    }
    public function getMaterials(){
        return $this->materials;
    }
    public function __construct(string $_image,string $_name,float $_price,array $_category,array $_materials)
    {
        parent::__construct($_image,$_name,$_price,$_category);
        $this->setMaterials($_materials);
    }
}