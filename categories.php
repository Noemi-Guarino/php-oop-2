<?php
require __DIR__.('/product.php');

class categories extends product{
    public $categoriesname;

    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $type,
        $categoriesname
        )
        
        {
            parent::__construct($name, $price, $photo, $categories, $type,$categoriesname);
            $this->categoriesname = $categoriesname;
        }

    

}

?>
