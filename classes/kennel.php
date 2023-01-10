<?php
class Kennel extends Product{
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
    public function __construct(array $_materials,string $_dimensions)
    {
        $this->setMaterials($_materials);
        $this->setDimensions($_dimensions);
    }
}