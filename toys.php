<?php
require_once __DIR__.('/product.php');

class toys extends product{
    public $toys;
    public $material;


    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $toys,
        $material
        )
        
        {
            parent::__construct($name, $price, $img, $categories);
            $this->toys = $toys;
            $this->material = $material;

        }

        public function get_toys()
        {
            return $this->toys;
        }

        public function get_material()
        {
            return $this->material;
        }


}

?> 