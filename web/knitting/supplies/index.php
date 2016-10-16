<?php
require('../model/database.php');
require('../model/yarndb.php');
require('../model/needledb.php');
require('../model/miscdb.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_supplies';
    }
}  

switch( $action ) {
    case 'list_supplies' :
        $yarnid = filter_input(INPUT_GET, 'yarnid', 
            FILTER_VALIDATE_INT);
        $needleid = filter_input(INPUT_GET, 'needleid', FILTER_VALIDATE_INT);
        $miscid = filter_input(INPUT_GET, 'miscid', FILTER_VALIDATE_INT);
        if ($yarnid == NULL || $yarnid == FALSE || $needleid == NULL || $needleid == FALSE
                 || $miscid == NULL || $miscid == FALSE) {
            $yarnid = 1;
            $needleid = 1;
            $miscid = 1;
        }
        $yarns = get_yarn();
        $needles = get_needle();
        $miscs = get_misc();
        include('../supplies/supplieslist.php');
        break;
    case 'view_yarn' :
        $yarnid = filter_input(INPUT_GET, 'yarnid', 
            FILTER_VALIDATE_INT);   
        if ($yarnid == NULL || $yarnid == FALSE) {
            $error = 'Missing or incorrect project id.';
            include('../errors/error.php');
        } else {
            $yarns = get_yarn();
        }
        // Get yarn data
        
        $yarnbrand = $yarns['yarnbrand'];
        $yarncolor = $yarns['yarncolor'];
        $yarnweight = $yarns['yarnweight'];
        $yarnamount = $yarns['yarnamount'];
        
        include('../supplies/yarn_view.php');
        break;
    case 'view_needle' :
        $needleid = filter_input(INPUT_GET, 'needleid', 
            FILTER_VALIDATE_INT);   
        if ($needleid == NULL || $needleid == FALSE) {
            $error = 'Missing or incorrect project id.';
            include('../errors/error.php');
        } else {
            $needles = get_needle();
        }
        // Get needle data
        
        $needlebrand = $needle['needlebrand'];
        $needletype = $needle['needletype'];
        $needlesize = $needle['needlesize'];
        $needleamount = $needle['needleamount'];
        
        include('../supplies/needle_view.php');
        break;   
    case 'view_misc' :
        $miscid = filter_input(INPUT_GET, 'miscid', 
            FILTER_VALIDATE_INT);   
        if ($miscid == NULL || $miscid == FALSE) {
            $error = 'Missing or incorrect project id.';
            include('../errors/error.php');
        } else {
            $miscs = get_yarn();
        }
        // Get misc data
        
        $miscname = $misc['miscname'];
        $miscamount = $misc['miscamount'];
        
        include('../supplies/misc_view.php');
        break;
  
}

?>