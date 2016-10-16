<?php

function get_project() {
    global $db;
    $query = 'SELECT * FROM project
              ORDER BY projectid';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_project_name($projectid) {
    global $db;
    $query = 'SELECT * FROM project
              WHERE project = :project';    
    $statement = $db->prepare($query);
    $statement->bindValue(':project', $projectid);
    $statement->execute();    
    $project = $statement->fetch();
    $statement->closeCursor();    
    $projectname = $project['projectname'];
    return $projectname;
}
