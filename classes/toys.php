<?php
require_once __DIR__.('/../product.php');
require_once __DIR__.('/../traits/HasMaterial.php');


class toys extends product{
    // public $material;

    use HasMaterial;


    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $material,
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