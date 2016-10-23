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
                    </tr>
                    <?php endforeach; ?>
                </table>
    </section>
</main>
<?php include '../view/footer.php'; ?>