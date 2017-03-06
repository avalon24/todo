<?php
    echo '<h1>Product List!!!</h1>';
    require('../model/database_connect.php');
    require('../model/product_db.php');
    $products = get_products_by_category();
    include('product_list.php');
?>
