<?php
require_once __DIR__.('/product.php');
require __DIR__.('/types/food.php');
require __DIR__.('/food.php');
require_once __DIR__.('/toys.php');
require __DIR__.('/kennels.php');
require __DIR__.('/card.php');



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
        <h2><?php echo $productOne->name ?></h2>
        <h2><?php echo $productOne->composition ?></h2>

    </div>
    
</body>
</html>