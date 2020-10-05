<!--
Name: Clifton McCallum
CSCI 315
Date: 10/05/2020
Project 1
-->
<?php
require('../model/database.php');
require('../model/product_db.php');
// require('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'list_products';
    }
}

//calls the get_products_by_category method located in the conroller
if ($action == 'list_products') {
    $product_code = filter_input(INPUT_POST, 'product');
    $products = get_product();

    include('product_list.php');
}

else if ($action == 'under_construction') {
    include('../under_construction.php');
}

else if ($action == 'delete_product') {
    $productCode = filter_input(INPUT_POST, 'product_code');
    if ($productCode == NULL || $productCode == FALSE) {
        $error = "Missing or incorrect product code.";
        include('../errors/error.php');
    } else {
        delete_product($productCode);
        header("Location: .?action=list_products");
}

// add else if to check if action == add_product
    }
 else if ($action == 'show_add_form') {
    include('product_add.php');
 }
 else if ($action == 'add_product') {
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $version = filter_input(INPUT_POST, 'version');
    $releaseDate = filter_input(INPUT_POST, 'releaseDate');

    if ($code == NULL || $code == FALSE || $name == NULL ||
            $version == NULL || $releaseDate == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_product($code, $name, $version, $releaseDate);
        header("Location: .?action=list_products");
    }
}

?>