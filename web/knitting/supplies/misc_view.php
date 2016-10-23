<?php include '../view/header.php'; ?>
<main>
    
    <section>
        <h1>Miscellaneous</h1>
        
        
        <table>
                    <tr>
                        <th>
                            <strong>Name</strong>
                        </th>
                        <th>
                            <strong>Amount</strong>
                        </th>
                    </tr>
                    <tr>
                       <?php foreach ($miscs as $misc) : ?>
                        <td>
                            <?php echo $misc['miscname']; ?>
                        </td>
                        <td>
                            <?php echo $misc['miscamount']; ?>
                        </td>  
                    </tr>
                    <?php endforeach; ?>
                </table>
        
    </section>
</main>
<?php include '../view/footer.php'; ?>