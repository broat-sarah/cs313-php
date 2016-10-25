<?php include '../view/header.php'; ?>
<main>
    <h1>Add Needle</h1>
        <form action="index.php" method="post" id="show_add_needle_form">
            <input type="hidden" name="action" value="needle_add">

            <label>Brand:</label>
            <input type="text" name="needlebrand"> <br>

            <input type="hidden" name="needleid">
            
            <label>Size:</label>
            <input type="text" name="needlesize"><br>

            <label>Amount:</label>
            <input type="text" name="needleamount"><br>

            <label>Type:</label>
            <input type="text" name="needletype"><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <p class="last_paragraph">
        <a href="index.php?action=view_needle">View Needles</a>
        <a href="index.php?action=list_supplies">View Supplies</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>