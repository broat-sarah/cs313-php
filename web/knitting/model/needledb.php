<?php

function get_needle() {
    global $db;
    $query = 'SELECT * FROM needle
              ORDER BY needleid';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

