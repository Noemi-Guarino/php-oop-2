<?php
require_once __DIR__.('/product.php');
require_once __DIR__.('/classes/food.php');
require_once __DIR__.('/classes/toys.php');
require_once __DIR__.('/classes/kennels.php');
require_once __DIR__.('/card.php');
require_once __DIR__.('/traits/HasMaterial.php');


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
                <div class="p-2">
                    <img src="<?php echo $productThree->get_img() ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body p-2">
                    <h3><?php echo $productThree->get_name() ?></h3>
                    <div class="card-text">
                        <h6><strong>Categoria:</strong> <?php echo $productThree->get_categories()?></h6>
                        <p><strong>Materiale:</strong> <?php echo $productThree->get_material() ?></p>
                        <h5><strong>Misure:</strong> <?php echo $productThree->get_format_kennels() ?></h5>
                        <p><strong>Colore:</strong> <?php echo $productTwo->get_color() ?></p>
                        <h5><?php echo $productThree->get_price() ?></h5>
                    </div>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>

            <div class="card my_card p-4 mb-4 m-5" style="width: 18rem;">
                <div class="p-2">
                    <img src="<?php echo $productTwo->get_img() ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body p-2">
                    <h3><?php echo $productTwo->get_name() ?></h3>
                    <div class="card-text">
                        <h6><strong>Categoria:</strong> <?php echo $productTwo->get_categories()?></h6>
                        <p><strong>Materiale:</strong> <?php echo $productTwo->get_material() ?></p>
                        <p><strong>Colore:</strong> <?php echo $productTwo->get_color() ?></p>
                        <h5><?php echo $productTwo->get_price() ?></h5>
                    </div>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>


            <div class="card my_card p-4 mb-4 m-5" style="width: 18rem;">
                <div class="p-2">
                    <img src="<?php echo $productOne->get_img() ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body p-2">
                    <h3><?php echo $productOne->get_name() ?></h3>
                    <div class="card-text">
                        <h6><strong>Categoria:</strong> <?php echo $productOne->get_categories()?></h6>
                        <p><strong>Composizione:</strong> <?php echo $productOne->get_composition() ?></p>
                        <h6><strong>Formato:</strong> <?php echo $productOne->get_format()?></h6>

                        <h5><?php echo $productOne->get_price() ?></h5>
                    </div>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
            
        </div>

    </div>
    
</body>
</html>