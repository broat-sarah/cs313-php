<?php include '../view/header.php'; ?>
<main>
    <section>
        <table>
                    <tr>
                        <th>
                            <strong>Project Name</strong>
                        </th>
                        <th>
                            <strong>Project Type</strong>
                        </th>
                        <th>
                            <strong>Start Date</strong>
                        </th>
                        <th>
                            <strong>Yarn</strong>
                        </th>
                        <th>
                            <strong>Needle</strong>
                        </th>
                        <th>
                            <strong>Miscellaneous</strong>
                        </th>
                    </tr>
                    <tr>
                       <?php foreach ($projectview as $project) : ?>
                        <td>
                            <?php echo $project['projectname']; ?>
                        </td>
                        <td>
                            <?php echo $project['projecttype']; ?>
                        </td>
                         <td>
                            <?php echo $project['projectstartdate']; ?>
                        </td>
                        <td>
                            <?php echo $project['yarnbrand']; ?> <?php echo $project['yarnweight']; ?> Weight in <?php echo $project['yarncolor']; ?>
                        </td>
                        <td>
                            <?php echo $project['needlebrand']; ?> <?php echo $project['needletype']; ?> Size <?php echo $project['needlesize']; ?>
                        </td>   
                        <td>
                            <?php echo $project['miscname']; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
 
    </section>
</main>
<?php include '../view/footer.php'; ?>