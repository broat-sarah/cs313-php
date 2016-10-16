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
            $projectid = 1;
        }
        $projectname = get_project_name($projectid);
        $projects = get_project();
        include('../project/projectlist.php');
        break;
    case 'view_project' :
        $projectid = filter_input(INPUT_GET, 'projectid', 
            FILTER_VALIDATE_INT);   
        if ($projectid == NULL || $orojectid == FALSE) {
            $error = 'Missing or incorrect project id.';
            include('../errors/error.php');
        } else {
            $projects = get_projects();
        }
        // Get project data
        
        $projectname = $projects['projectname'];
        $projectdate = $projects['projectstartdate'];
        $projectype = $projects['projecttype'];
        $projectyarn = $projects['yarnid'];
        $projectneedle = $projects['needleid'];
        $projectmisc = $projects['miscid'];
        
        
        include('../project/project_view.php');
        break;
  
}

?>