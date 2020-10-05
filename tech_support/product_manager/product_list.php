<!--
Name: Clifton McCallum
CSCI 315
Date: 10/05/2020
Project 1
-->
<?php include '../view/header.php'; ?>
<main>
    <h1>Product List</h1>

    <section>
        <!-- display a table of products -->
  <table>
            <tr>
                <th>Product Code</th>
                <th>Name</th>
                 <th>Version</th>
                <th>Release Date</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['version']; ?></td>
                <td><?php echo $product['releaseDate']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="product_code"
                           value="<?php echo $product['productCode']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>




        <p class="last_paragraph">
            <a href="?action=show_add_form">Add Product</a>
        </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>