<?php
require_once __DIR__.('/product.php');

class kennels extends product{
    public $material_kennels;
    public $format_kennels;


    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $material_kennels,
        $format_kennels
        )
        
        {
            parent::__construct($name, $price, $img, $categories);
            $this->material_kennels = $material_kennels;
            $this->format_kennels = $format_kennels;

        }

    

        public function get_material_kennels()
        {
            return $this->material_kennels;
        }

        public function get_format_kennels()
        {
            return $this->format_kennels;
        }


}
?>