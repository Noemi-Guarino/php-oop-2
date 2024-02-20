<?php
require_once __DIR__.('/product.php');
require_once __DIR__.('/HasMaterial.php');


class kennels extends product{
    // public $material_kennels;
    public $format_kennels;

    use HasMaterial;

    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $material,
        $format_kennels,
        )
        
        {
            parent::__construct($name, $price, $img, $categories);
            $this->material = $material;
            $this->format_kennels = $format_kennels;

        }

    

        public function get_material()
        {
            return $this->material;
        }

        public function get_format_kennels()
        {
            return $this->format_kennels;
        }


}
?>