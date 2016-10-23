<?php

function get_misc() {
    global $db;
    $query = 'SELECT * FROM misc
              ORDER BY miscid';
    $statement = $db->prepare($query);
    $statement->execute();
    $miscs = $statement->fetchAll();
    $statement->closeCursor();
    return $miscs;      
}
