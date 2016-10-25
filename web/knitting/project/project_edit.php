<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Project</h1>
        <form action="index.php" method="post" id="edit_project_form">
            <input type="hidden" name="action" value="edit_project">

            <label>Name:</label>
            <input type="text" name="projectname" value="<?php echo $projectview['projectname']; ?>"> <br>

            <input type="hidden" name="projectid" value="<?php echo $projectview['projectid']; ?>">
            
            <label>Type:</label>
            <input type="text" name="projectttype" value="<?php echo $projectview['projecttype']; ?>"><br>

            <label>Start Date:</label>
            <input type="text" name="projectstartdate" value="<?php echo $projectview['projectstartdate']; ?>"><br>


            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <p class="last_paragraph">
        <a href="index.php?action=project_view">View Projects</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>