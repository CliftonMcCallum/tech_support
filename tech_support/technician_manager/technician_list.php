<!--
Name: Clifton McCallum
CSCI 315
Date: 10/12/2020
Project 2
-->
<?php include '../view/header.php'; ?>
<main>
    <h1>Technician List</h1>

    <section>
        <!-- display a table of products -->
  <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                 <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($technicians as $technician) : ?>
            <tr>
                <td><?php echo $technician['firstName']; ?></td>
                <td><?php echo $technician['lastName']; ?></td>
                <td><?php echo $technician['email']; ?></td>
                <td><?php echo $technician['phone']; ?></td>
                <td><?php echo $technician['password']; ?></td>

                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_technician">
                    <input type="hidden" name="tech_id"
                           value="<?php echo $technician['techID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>

            <?php endforeach; ?>
        </table>




        <p class="last_paragraph">
            <a href="?action=show_add_form">Add Technician</a>
        </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>