<?php
require_once __DIR__.'/../Product.php';
class Food extends Product{
    public $composition;
    public $format;


    public function __construct(
        $name, 
        $price, 
        $img, 
        $categories, 
        $composition,
        $format
        )
        
        {
            parent::__construct($name, $price, $img, $categories);
            $this->composition = $composition;
            $this->format = $format;
        
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
