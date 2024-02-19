<?php
require __DIR__.('/product.php');
class food extends product{
    public $food;

    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $food
        )
        
        {
            parent::__construct($name, $price, $photo, $categories);
            $this->food = $food;
        }

        public function get_food()
        {
            return $this->food;
        }

}
