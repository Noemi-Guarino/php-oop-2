<?php
require_once __DIR__.'/../Product.php';
require_once __DIR__.'/../traits/HasMaterial.php';
require_once __DIR__.'/../traits/HasColor.php';



class Toys extends Product{
    // public $material;

    use HasMaterial;
    use HasColor;



    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $material,
        $color,
        )
        
        {
            parent::__construct($name, $price, $img, $categories);
            $this->material = $material;
            $this->color = $color;



        }


        public function get_material()
        {
            return $this->material;
        }

}

?> 