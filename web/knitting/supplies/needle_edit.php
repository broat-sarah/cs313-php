<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Needle</h1>
        <form action="index.php" method="post" id="edit_needle_form">
            <input type="hidden" name="action" value="edit_needle">

            <label>Brand:</label>
            <input type="text" name="needlebrand" value="<?php echo $needles['needlebrand']; ?>"> <br>

            <input type="hidden" name="needleid" value="<?php echo $needles['needleid']; ?>">
            
            <label>Size:</label>
            <input type="text" name="needlesize" value="<?php echo $needles['needlesize']; ?>"><br>

            <label>Amount:</label>
            <input type="text" name="needleamount" value="<?php echo $needles['needleamount']; ?>"><br>

            <label>Type:</label>
            <input type="text" name="yarncolor" value="<?php echo $needles['needletype']; ?>"><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <p class="last_paragraph">
        <a href="index.php?action=view_needle">View Yarns</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>