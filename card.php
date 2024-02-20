<?php
try{
    $productOne = new Food
    ( 'Croccantini',
     '19,99€',
      8,
      'cane',
       'Super crocchette', 
       'Proteine disidratate di salmone',
       'gluten free');

    }catch(Exception $e) {
            // Viene eseguito nel caso in cui si verifichi l'errore
            // echo '<h4 style="color: red;">Questo valore non è valido</h4>';
            $errorMessage = $e->getMessage();
    }


$productTwo = new Toys( 'Graffiatoio Cat Lounge', '39,99€', 'https://www.repstatic.it/content/nazionale/img/2024/02/17/143814201-7f940fca-0619-41bb-817c-02f794e586d1.jpg', 'gatto', 'cartone ondulato','blu');
$productThree = new Kennels( 'Cuccia per cani Jackson', '79,99€', 'https://www.animaleamico.com/public/image/photo_an/632768/2616897/FT_113852417.webp', 'cane', 'Cuccia in legno di abete per cani','size large','marrone');

?> 