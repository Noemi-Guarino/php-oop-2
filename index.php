<?php
require __DIR__.('product.php');
require __DIR__.('categories.php');
require __DIR__.('food.php');
require __DIR__.('card.php');
require __DIR__.('toys.php');
require __DIR__.('kennels.php');

// Aggiunta di categorie
$categoriaCani = new categories(1, 'Cani');
$categoriaGatti = new categories(2, 'Gatti');