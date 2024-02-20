<?php

// creo un tratto che possono ereditari sia toys che kennels 

trait HasColor {

    public $color;

    public function get_color()
    {
        return $this->color;
    }

}