<?php
require_once __DIR__.'/../Product.php';
require_once __DIR__.'/../traits/HasMaterial.php';
require_once __DIR__.'/../traits/HasColor.php';



class Kennels extends Product{
    // public $material_kennels;
    public $format_kennels;

    use HasMaterial;
    use HasColor;


    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $material,
        $format_kennels,
        $color,
        )
        
        {
            
            parent::__construct($name, $price, $img, $categories);
            $this->material = $material;
            $this->format_kennels = $format_kennels;
            $this->color = $color;



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