<?php
require __DIR__.('/product.php');

class toys extends product{
    public $toys;

    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $toys
        )
        
        {
            parent::__construct($name, $price, $photo, $categories);
            $this->toys = $toys;
        }

        public function get_toys()
        {
            return $this->toys;
        }


}

