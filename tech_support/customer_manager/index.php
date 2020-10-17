<!--
Name: Clifton McCallum
CSCI 315
Date: 10/12/2020
Project 2
-->
<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'customer_list';
    }
}
if ($action == 'customer_list') {
     include('customer_search.php');
}
// calls the get_customers method located in model/customer_db
if ($action == 'search_customer') {
        $lastName = filter_input(INPUT_POST, 'lastName');
        $customers = get_customers($lastName);
        include('customer_results.php');
}
// calls the get_customer_data located in model/customer_db
else if($action == 'select_customer') {
    $customerID = filter_input(INPUT_POST, 'customerID');
    $customer = get_customer_data($customerID);
    include('view_customer.php');
}
// calls the update_customer method located in model/customer_db
else if ($action == 'update_customer'){
    $customerID = filter_input(INPUT_POST, 'customerID');

    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $postalCode = filter_input(INPUT_POST, 'postalCode');
    $countryCode = filter_input(INPUT_POST, 'countryCode');
    $phone = filter_input(INPUT_POST, 'phone');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    update_customer($firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email, $password, $customerID);
    header('Location: .?action=customer_list');
}

