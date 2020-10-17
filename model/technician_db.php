<!--
Name: Clifton McCallum
CSCI 315
Date: 10/12/2020
Project 2
-->
<?php
// get technicians
function get_technician() {
    global $db;
    $query = 'SELECT * FROM technicians';
    $statement = $db->prepare($query);
    $statement->execute();
    $technician = $statement->fetchAll();
    $statement->closeCursor();
    return $technician;
}

// delete technician
function delete_technician($techID) {
    global $db;
    $query = 'DELETE FROM technicians
              WHERE techID = :tech_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':tech_id', $techID);
    $statement->execute();
    $statement->closeCursor();
}

// add technician
function add_technician($first, $last, $email, $phone, $password) {
    global $db;
    $query = 'INSERT INTO technicians
                 (firstName, lastName, email, phone, password)
              VALUES
                 (:first, :last, :email, :phone, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':first', $first);
    $statement->bindValue(':last', $last);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $password);

    $statement->execute();
    $statement->closeCursor();
}

?>