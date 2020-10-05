<!--
Name: Clifton McCallum
CSCI 315
Date: 10/05/2020
Project 1
-->
<?php
function get_product() {
    global $db;
    $query = 'SELECT * FROM products';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}

// delete product
function delete_product($productCode) {
    global $db;
    $query = 'DELETE FROM products
              WHERE productCode = :product_Code';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_Code', $productCode);
    $statement->execute();
    $statement->closeCursor();
}

// add product
function add_product($code, $name, $version, $releaseDate) {
    global $db;
    $query = 'INSERT INTO products
                 (productCode, name, version, releaseDate)
              VALUES
                 (:code, :name, :version, :releaseDate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':releaseDate', $releaseDate);
    $statement->execute();
    $statement->closeCursor();
}

// get product name

// get product version

// get release date

?>