<?php
require_once __DIR__.('/product.php');
require_once __DIR__.('/food.php');
require_once __DIR__.('/toys.php');
require_once __DIR__.('/kennels.php');
require_once __DIR__.('/card.php');

// $productOne = new Food( 'Croccantini', '19,99€', 'img', 'cane', 'Super crocchette', 'Proteine disidratate di salmone','gluten free');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>

    <div>
        <!-- <h1>we</h1> -->
        <h2><?php echo $productThree->get_name() ?></h2>
        <h2><?php echo $productThree->get_price() ?></h2>
        <h2><?php echo $productThree->get_img() ?></h2>
        <h2><?php echo $productThree->get_categories()?></h2>
        <h2><?php echo $productThree->get_kennels() ?></h2>
        <h2><?php echo $productThree->get_material_kennels() ?></h2>
        <h2><?php echo $productThree->get_format_kennels() ?></h2>




    </div>
    
</body>
</html>