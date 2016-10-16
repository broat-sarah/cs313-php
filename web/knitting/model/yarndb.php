<?php

function get_yarn() {
    global $db;
    $query = 'SELECT * FROM yarn
              ORDER BY yarnid';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_yarn_by_project($yarnid) {
    global $db;
    $query = 'SELECT * FROM project
              WHERE project.yarnid = :yarnid
              ORDER BY projectid';
    $statement = $db->prepare($query);
    $statement->bindValue(":yarnid", $yarnid);
    $statement->execute();
    $yarn = $statement->fetchAll();
    $statement->closeCursor();
    return $yarn;
}
