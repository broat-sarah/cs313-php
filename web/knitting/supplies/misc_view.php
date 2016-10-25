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
                        <th>
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
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
                        <td>
                            <input type="button" action="misc_edit" name="misc_edit" value="Edit">
                        </td>
                        <td>
                            <input type="button" action="misc_delete" name="misc_delete" value="Delete">
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>    
                <br /><br />
        <a href="index.php?action=show_add_form_misc">Add Miscellaneous</a><br />
        <a href="index.php?action=list_supplies">View Supplies</a>
    </section>
</main>
<?php include '../view/footer.php'; ?>