<?php

function get_project() {
    global $db;
    $query = 'SELECT * FROM project';
    $statement = $db->prepare($query);
    $statement->execute();
    $projects = $statement->fetchAll();
    $statement->closeCursor();
    return $projects;   
}

function get_project_view($yarnid, $needleid) {
    global $db;
    $query = 'SELECT * FROM project p
            INNER JOIN yarn y on p.yarnid = y.yarnid
            INNER JOIN NEEDLE n on p.needleid = n.needleid
            WHERE yarnid = :yarnid AND needleid = :needleid
            ORDER BY projectid ASC';    
    $statement = $db->prepare($query);
    $statement->bindValue(':yarnid', $yarnid);
    $statement->bindValue(':needleid', $needleid);
    $statement->execute();    
    $projectview = $statement->fetchAll();
    $statement->closeCursor();    
    return $projectview;
} 


