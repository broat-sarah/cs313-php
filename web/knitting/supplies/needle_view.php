<?php include '../view/header.php'; ?>
<main>
    
    <section>
        <h1>Needles</h1>

        <table>
                    <tr>
                        <th>
                            <strong>Needle Brand</strong>
                        </th>
                        <th>
                            <strong>Needle Size</strong>
                        </th>
                        <th>
                            <strong>Needle Amount</strong>
                        </th>
                        <th>
                            <strong>Needle Type</strong>
                        </th>
                    </tr>
                    <tr>
                       <?php foreach ($needles as $needle) : ?>
                        <td>
                            <?php echo $needle['needlebrand']; ?>
                        </td>
                        <td>
                            <?php echo $needle['needlesize']; ?>
                        </td>
                        <td>
                            <?php echo $needle['needleamount']; ?>
                        </td>
                        <td>
                            <?php echo $needle['needletype']; ?>
                        </td>   
                    </tr>
                    <?php endforeach; ?>
                </table>
        
    </section>
</main>
<?php include '../view/footer.php'; ?>