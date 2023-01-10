<?php
class Toy extends Product{
    private $materials;
    
    public function setMaterials($_materials){
        $this->materials=$_materials;
    }
    public function getMaterials(){
        return $this->materials;
    }
    public function __construct(array $_materials)
    {
        $this->setMaterials($_materials);
    }
}