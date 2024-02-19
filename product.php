<?php
class product {
    public $name;
    public $price;
    public $photo;
    public $categories; // Cani o Gatti
    public $type; // Prodotto, Cibo, Gioco, Cuccia

    public function __construct($name, $price, $photo, $categories, $type) {
        $this->name = $name;
        $this->price = $price;
        $this->photo = $photo;
        $this->categories = $categories;
        $this->type = $type;
    }
}

?>