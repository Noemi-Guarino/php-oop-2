<?php
require_once __DIR__.('/product.php');

class toys extends product{
    public $material;


    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $material
        )
        
        {
            parent::__construct($name, $price, $img, $categories);
            $this->material = $material;

        }


        public function get_material()
        {
            return $this->material;
        }


}

?> 