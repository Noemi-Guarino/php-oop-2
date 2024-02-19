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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container my_container p-4">
        <div class="containercard">
            <div class="card my_card p-4 mb-4 m-5" style="width: 18rem;">
                <img src="<?php echo $productThree->get_img() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2><?php echo $productThree->get_name() ?></h2>
                    <div class="card-text">
                        <h6>Categoria:<?php echo $productThree->get_categories()?></h6>
                        <p><strong>Materiale:</strong> <?php echo $productThree->get_material_kennels() ?></p>
                        <h5><strong>Misure:</strong> <?php echo $productThree->get_format_kennels() ?></h5>
                        <h5><?php echo $productThree->get_price() ?></h5>
                    </div>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>

            <div class="card my_card p-4 mb-4 m-5" style="width: 18rem;">
                <img src="<?php echo $productTwo->get_img() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2><?php echo $productTwo->get_name() ?></h2>
                    <div class="card-text">
                        <h6>Categoria:<?php echo $productTwo->get_categories()?></h6>
                        <p><strong>Materiale:</strong><?php echo $productTwo->get_material() ?></p>
                        <h5><?php echo $productTwo->get_price() ?></h5>
                    </div>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>


            <div class="card my_card p-4 mb-4 m-5" style="width: 18rem;">
                <img src="<?php echo $productOne->get_img() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2><?php echo $productOne->get_name() ?></h2>
                    <div class="card-text">
                        <h6>Categoria:<?php echo $productOne->get_categories()?></h6>
                        <p><strong>Composizione:</strong> <?php echo $productOne->get_composition() ?></p>
                        <h6><strong>Formato:</strong><?php echo $productOne->get_format()?></h6>

                        <h5><?php echo $productOne->get_price() ?></h5>
                    </div>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
            
        </div>

    </div>
    
</body>
</html>