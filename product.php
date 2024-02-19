<?php
class product {
    public $name;
    public $price;
    public $photo;
    public $categories; // Cani o Gatti

    public function __construct($name, $price, $photo, $categories) {
        $this->name = $name;
        $this->price = $price;
        $this->photo = $photo;
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

    public function get_photo()
    {
        return $this->photo;
    }

    public function get_categories()
    {
        return $this->categories;
    }


}

?>