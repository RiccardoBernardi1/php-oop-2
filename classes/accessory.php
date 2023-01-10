<?php
class Accessory extends Product{
    private $materials;
    private $dimensions;

    public function setMaterials($_materials){
        $this->materials=$_materials;
    }
    public function setDimensions($_dimensions){
        $this->dimensions=$_dimensions;
    }
    public function getMaterials(){
        return $this->materials;
    }
    public function getDimensions(){
        return $this->dimensions;
    }
    public function __construct(string $_name,float $_price,array $_category,array $_materials,string $_dimensions)
    {
        parent::__construct($_name,$_price,$_category);
        $this->setMaterials($_materials);
        $this->setDimensions($_dimensions);
    }
}