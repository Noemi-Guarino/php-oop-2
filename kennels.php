<?php
require __DIR__.('/product.php');

class kennels extends product{
    public $kennels;

    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $type,
        $kennels
        )
        
        {
            parent::__construct($name, $price, $photo, $categories, $type,$kennels);
            $this->kennels = $kennels;
        }

    

}
