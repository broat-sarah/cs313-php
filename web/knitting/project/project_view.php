<?php include '../view/header.php'; ?>
<main>
    <section>
        <?php foreach ($projectview as $project) : ?>
            <h1><?php echo $project['projectname']; ?></h1>
                <div>
                    <p><b>Project Type:</b> <?php echo $project['projecttype']; ?></p>
                    <p><b>Start Date:</b> <?php echo $project['projectstartdate']; ?></p>
                    <p><b>Yarn:</b> <?php echo $project['yarnid']; ?></p>
                    <p><b>Needles:</b> <?php echo $project['needleid']; ?></p>
                    <p><b>Miscellaneous:</b> <?php echo $project['miscid']; ?></p>
                </div>
        <?php endforeach; ?>
    </section>
</main>
<?php include '../view/footer.php'; ?>