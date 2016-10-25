<?php include '../view/header.php'; ?>
<main>

    <section>
        <h1>Yarn</h1>

                <table>
                    <tr>
                        <th>
                            <strong>Yarn Brand</strong>
                        </th>
                        <th>
                            <strong>Yarn Color</strong>
                        </th>
                        <th>
                            <strong>Yarn Weight</strong>
                        </th>
                        <th>
                            <strong>Yarn Amount</strong>
                        </th>
                        <th>
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                       <?php foreach ($yarns as $yarn) : ?>
                        <td>
                            <?php echo $yarn['yarnbrand']; ?>
                        </td>
                        <td>
                            <?php echo $yarn['yarncolor']; ?>
                        </td>
                        <td>
                            <?php echo $yarn['yarnweight']; ?>
                        </td>
                        <td>
                            <?php echo $yarn['yarnamount']; ?>
                        </td>   
                        <td>
                            <a href="index.php?action=show_edit_form_yarn">Edit</a>
                        </td>
                        <td>
                            <input type="button" action="yarn_delete" name="yarn_delete" value="Delete">
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
        <br /><br />
        <a href="index.php?action=show_add_form_yarn">Add Yarn</a>
        <a href="index.php?action=list_supplies">View Supplies</a>
    </section>
</main>
<?php include '../view/footer.php'; ?>