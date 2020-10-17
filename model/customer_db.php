<!--
Name: Clifton McCallum
CSCI 315
Date: 10/12/2020
Project 2
-->
<?php
// gets customers by lastName
function get_customers($lastName) {
    global $db;
    $query = 'SELECT * FROM customers WHERE lastName =  :lastName';
    $statement = $db->prepare($query);
    $statement->bindValue(':lastName', $lastName);
    $statement->execute();
    $customer = $statement->fetchAll();
    $statement->closeCursor();
    return $customer;
}
// gets customer by customerID
function get_customer_data($customerID){
    global $db;
    $query = 'SELECT * FROM customers WHERE customerID =  :customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customerID);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $customer;
}
// updates customer
function update_customer($firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email, $password, $customerID){
    global $db;
    $query = "UPDATE customers SET firstName = :firstName, lastName = :lastName, address = :address, city = :city, state = :state, postalCode = :postalCode, countryCode = :countryCode, phone = :phone, email = :email, password = :password WHERE customerID = :customerID";
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
      $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
   $statement->bindValue(':postalCode', $postalCode);
    $statement->bindValue(':countryCode', $countryCode);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
   $statement->bindValue(':customerID', $customerID);
    $statement->execute();
    $statement->closeCursor();
}

?>