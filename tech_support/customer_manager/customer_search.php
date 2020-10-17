<!--
Name: Clifton McCallum
CSCI 315
Date: 10/12/2020
Project 2
-->
<?php include '../view/header.php'; ?>
<main>
    <h1>Customer Search</h1>
    <form action="index.php" method="post" id="aligned">
        <input type="hidden" name="action" value="search_customer">

        <label>Last Name:</label>
        <input type="text" name="lastName" />


        <input type="submit" name="Find" value="Search" />
        <br>
    </form>

</main>
<?php include '../view/footer.php'; ?>