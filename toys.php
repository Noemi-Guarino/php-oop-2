<?php
require __DIR__.('/product.php');

class toys extends product{
    public $toys;
    public $material;


    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $toys,
        $material
        )
        
        {
            parent::__construct($name, $price, $photo, $categories);
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

