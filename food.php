<?php
require __DIR__.('/product.php');
class food extends product{
    public $food;

    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $type,
        $food
        )
        
        {
            parent::__construct($name, $price, $photo, $categories, $type,$food);
            $this->food = $food;
        }

    

}
