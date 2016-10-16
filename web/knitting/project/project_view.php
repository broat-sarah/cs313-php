<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1 id="projectViewHeading"><?php echo $projectname; ?></h1>
        <div id="right_column">
            <p><b>Project Type:</b> <?php echo $projecttype; ?></p>
            <p><b>Start Date:</b> <?php echo $projectstartdate; ?></p>
            <p><b>Yarn:</b> <?php echo $projectyarn; ?></p>
            <p><b>Needles:</b> <?php echo $projectneedles; ?></p>
            <p><b>Miscellaneous:</b> <?php echo $projectyarn; ?></p>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>