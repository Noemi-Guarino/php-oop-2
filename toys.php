<?php
require __DIR__.('/product.php');

class toys extends product{
    public $toys;

    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $type,
        $toys
        )
        
        {
            parent::__construct($name, $price, $photo, $categories, $type,$toys);
            $this->toys = $toys;
        }

    

}

