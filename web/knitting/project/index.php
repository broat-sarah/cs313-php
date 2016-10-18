<?php
require('../model/database.php');
require('../model/projectdb.php');
require('../model/yarndb.php');
require('../model/needledb.php');
require('../model/miscdb.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_projects';
    }
}  

switch( $action ) {
    case 'list_projects' :
        $projectid = filter_input(INPUT_GET, 'projectid', 
            FILTER_VALIDATE_INT);
        if ($projectid == NULL || $projectid == FALSE) {
        }    
        $projects = get_project();
        include('../project/projectlist.php');
        break;
    case 'view_project' :
        $projectid = filter_input(INPUT_GET, 'projectid');  
        $yarnid = filter_input(INPUT_GET, 'yarnid');
        $needleid = filter_input(INPUT_GET, 'needleid');
        $projectview = get_project_view($yarnid, $needleid);
        
        // Get project data
        
        /*$projectname = $projects[0];
        $projectdate = $projects[1];
        $projectype = $projects[2];
        $projectyarn = $projects[3];
        $projectneedle = $projects[4];
        $projectmisc = $projects[5]; */
        
        
        include('../project/project_view.php');
        break;
  
}

?>