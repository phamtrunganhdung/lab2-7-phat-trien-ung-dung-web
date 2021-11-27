<?php
 require_once 'controllers/employeeController.php';
 require_once 'controllers/DepartmentController.php';
 $empController = new EmployeeController();
 $departController = new DepartmentController();
    if(!isset($_GET["action"]))
    $empController -> run("index");
    else
    switch($_GET["action"]){
        case "empdetail":
            $empController->run("detail");
            break;
        case "empdelete":
            $empController->run("delete");
            break;
        case "empedit":
            $empController->run("edit");
            break;
        case "empadd":
             $empController->run("add");
             break;
        case "departindex":
            $departController->run("index");
             break;
        case "departadd":
           $departController->run("add");
            break;
        case "departdelete":
            $departController->run("delete");
             break;
        case "departedit":
           $departController->run("edit");
            break;
    }
?>