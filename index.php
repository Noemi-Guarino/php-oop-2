<?php
require __DIR__.('product.php');
require __DIR__.('categories.php');
require __DIR__.('food.php');
require __DIR__.('card.php');
require __DIR__.('toys.php');
require __DIR__.('kennels.php');

$productOne = new kennels('Cuccia', '50,99', 'photo.png','cane','cuccia zeus','Plastic Verde','Lunghezza 72,2;
profondità 61.8 cm;altezza 62.3 cm.');
$productTwo = new food('Croccantini', '19,99', 'photo.png','cani',
'Trainer cane adult mini sensitive maturity no gluten con salmone',
'Proteine disidratate di salmone 11,5%, granturco integrale 11%, riso, proteina di granturco, piselli, fioretto di granturco, 
farinaccio di riso, salmone 6,5%, riso integrale 4%, semi di lino, grasso di origine animale, olio di granturco, sostanze minerali, 
aroma senza proteina animale, estratto secco di radice di cicoria (fonte di inulina) 0,7%, lignocellulosa, estratto secco di gambo dananas 0,1%,
 estratto secco di yucca schidigera 0,025%, alga spirulina (Arthrospira platensis) 0,02%.','2 Kg'
);
$productThree = new toys('tiragraffi', '8,99', 'photo.png','gatti','FERPLAST GATTO GIOCO TIRAGRAFFI MAGIC TOWER','cartone');

?>