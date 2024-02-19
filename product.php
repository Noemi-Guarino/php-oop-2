<?php
class product {
    public $name;
    public $price;
    public $img;
    public $categories; // Cani o Gatti

    public function __construct($name, $price, $img, $categories) {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->categories = $categories;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_price()
    {
        return $this->price;
    }

    public function get_img()
    {
        return $this->img;
    }

    public function get_categories()
    {
        return $this->categories;
    }


    
}

?>


