<?php
require __DIR__.('/product.php');

class categories extends product{
    public $categoriesname;

    public function __construct(
        $name, 
        $price, 
        $photo, 
        $categories, 
        $categoriesname
        )
        
        {
            parent::__construct($name, $price, $photo, $categories);
            $this->categoriesname = $categoriesname;
        }

        public function get_categoriesname()
        {
            return $this->categoriesname;
        }
    

}

?>
