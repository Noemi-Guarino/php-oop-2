<?php
require __DIR__.('/product.php');

class kennels extends product{
    public $kennels;

    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $kennels
        )
        
        {
            parent::__construct($name, $price, $photo, $categories);
            $this->kennels = $kennels;
        }

    
        public function get_kennels()
        {
            return $this->kennels;
        }

}
