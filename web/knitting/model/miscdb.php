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

function add_misc($miscname, $miscamount) {
    global $db;
    $query = 'INSERT INTO misc
                 (miscname, miscamount)
              VALUES
                 (:miscname, :miscamount)';
        
    $statement = $db->prepare($query);
    $statement->bindValue(':miscname', $miscname);
    $statement->bindValue(':miscamount', $miscamount);
    $statement->execute();
    $statement->closeCursor();
}