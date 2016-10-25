<?php

function get_needle() {
    global $db;
    $query = 'SELECT * FROM needle
              ORDER BY needleid';
    $statement = $db->prepare($query);
    $statement->execute();
    $needles = $statement->fetchAll();
    $statement->closeCursor();
    return $needles;       
}

function add_needle($needlebrand, $needlesize, $needleamount, $needletype) {
    global $db;
    $query = 'INSERT INTO needle
                 (needlebrand, needlesize, needleamount, needletype)
              VALUES
                 (:needlebrand, :needlesize, :needleamount, :needletype)';
        
    $statement = $db->prepare($query);
    $statement->bindValue(':needlebrand', $needlebrand);
    $statement->bindValue(':needlesize', $needlesize);
    $statement->bindValue(':needleamount', $needleamount);
    $statement->bindValue(':needletype', $needletype);
    $statement->execute();
    $statement->closeCursor();
}

