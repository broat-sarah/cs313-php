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

function get_project_view() {
    global $db;
    $query = 'SELECT * FROM project p
            INNER JOIN yarn y on p.yarnid = y.yarnid
            INNER JOIN needle n on p.needleid = n.needleid
            INNER JOIN misc m on p.miscid = m.miscid
            ORDER BY projectid ASC';    
    $statement = $db->prepare($query);
    $statement->execute();    
    $projectview = $statement->fetchAll();
    $statement->closeCursor();    
    return $projectview;
} 


