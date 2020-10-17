<!--
Name: Clifton McCallum
CSCI 315
Date: 10/12/2020
Project 2
-->
<?php
require('../model/database.php');
require('../model/technician_db.php');
// require('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'technician_list';
    }
}
//calls the get_technician method located in model/technician_db
if ($action == 'technician_list') {
    $techs = filter_input(INPUT_POST, 'technician');
    $technicians = get_technician();
    include('technician_list.php');
}
else if ($action == 'under_construction') {
    include('../under_construction.php');
}
// calls delete_technician in model/technician_db
else if ($action == 'delete_technician') {
    $techID = filter_input(INPUT_POST, 'tech_id');
    if ($techID == NULL || $techID == FALSE) {
        $error = "Missing or incorrect product code.";
        include('../errors/error.php');
   } else {
       delete_technician($techID);
       header("Location: .?action=technician_list");
   }
}
// moves to page to add technician
 else if ($action == 'show_add_form') {
    include('technician_add.php');
 }
 // calls add_technician in model/technician_db if input is valid
 else if ($action == 'add_technician') {
    $first = filter_input(INPUT_POST, 'firstName');
    $last = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $password = filter_input(INPUT_POST, 'password');

    if($first == NULL || $last == NULL || $email == NULL ||
        $phone == NULL || $password == NULL || $password == false){
        $error = "Invalid technician data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_technician($first, $last, $email, $phone, $password);
        header("Location: .?action=technician_list");
    }
 }
?>