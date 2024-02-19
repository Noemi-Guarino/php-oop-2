<?php
require_once __DIR__.('/product.php');

class kennels extends product{
    public $kennels;
    public $material_kennels;
    public $format_kennels;


    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $kennels,
        $material_kennels,
        $format_kennels
        )
        
        {
            parent::__construct($name, $price, $img, $categories);
            $this->kennels = $kennels;
            $this->material_kennels = $material_kennels;
            $this->format_kennels = $format_kennels;

        }

    
        public function get_kennels()
        {
            return $this->kennels;
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