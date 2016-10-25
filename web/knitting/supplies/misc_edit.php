<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Miscellaneous</h1>
        <form action="index.php" method="post" id="edit_misc_form">
            <input type="hidden" name="action" value="edit_misc">

            <label>Name:</label>
            <input type="text" name="miscname" value="<?php echo $miscs['miscname']; ?>"> <br>

            <input type="hidden" name="miscid" value="<?php echo $miscs['miscid']; ?>">
            
            <label>Amount:</label>
            <input type="text" name="miscamount" value="<?php echo $miscs['miscamount']; ?>"><br>

            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <p class="last_paragraph">
        <a href="index.php?action=misc_view">View Yarns</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>