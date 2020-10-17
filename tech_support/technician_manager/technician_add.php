<!--
Name: Clifton McCallum
CSCI 315
Date: 10/12/2020
Project 2
-->
<?php include '../view/header.php'; ?>
<main>
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="aligned">
        <input type="hidden" name="action" value="add_technician">

        <label>First Name:</label>
        <input type="text" name="firstName" />
        <br>

        <label>Last Name:</label>
        <input type="text" name="lastName" />
        <br>
        <label>Email:</label>
        <input type="text" name="email" />
        <br>
        <label>Phone:</label>
        <input type="text" name="phone" />
        <br>
        <label>Password:</label>
        <input type="text" name="password" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Technician" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=technician_list">View Technician List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>

