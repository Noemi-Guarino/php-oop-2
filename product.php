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

    public function get_photo()
    {
        return $this->img;
    }

    public function get_categories()
    {
        return $this->categories;
    }


    
}
// $productOne = new kennels('Cuccia', '50,99', 'photo.png','cane','cuccia zeus','Plastic Verde','Lunghezza 72,2;
// profondità 61.8 cm;altezza 62.3 cm.');

// $productTwo = new food('Croccantini', '19,99', 'photo.png','cani',
// 'Trainer cane adult mini sensitive maturity no gluten con salmone',
// 'Proteine disidratate di salmone 11,5%, granturco integrale 11%, riso, proteina di granturco, piselli, fioretto di granturco, 
// farinaccio di riso, salmone 6,5%, riso integrale 4%, semi di lino, grasso di origine animale, olio di granturco, sostanze minerali, 
// aroma senza proteina animale, estratto secco di radice di cicoria (fonte di inulina) 0,7%, lignocellulosa, estratto secco di gambo dananas 0,1%,
//  estratto secco di yucca schidigera 0,025%, alga spirulina (Arthrospira platensis) 0,02%.','2 Kg'
// );
// $productThree = new toys('tiragraffi', '8,99', 'photo.png','gatti','FERPLAST GATTO GIOCO TIRAGRAFFI MAGIC TOWER','cartone');


// var_dump($productOne);
// var_dump($productTwo);
// var_dump($productThree);
?>


