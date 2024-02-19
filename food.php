<?php
require_once __DIR__.('/product.php');
class food extends product{
    public $food;
    public $composition;
    public $format;


    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $food,
        $composition,
        $format
        )
        
        {
            parent::__construct($name, $price, $img, $categories);
            $this->food = $food;
            $this->composition = $composition;
            $this->format = $format;
        
        }

        public function get_food()
        {
            return $this->food;
        }

        public function get_composition()
        {
            return $this->composition;
        }

        public function get_format()
        {
            return $this->format;
        }

}
?> 
