<?php

//$controller ='';
//if(!empty($_GET['controller'])) {
//    $controller = $_GET['controller'];
//}
$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? '';
switch ($controller) {
    case '':
        require_once "controller/root.php";
        break;
    case 'lop':
        require_once 'controller/lop_controller.php';
        break;
    case 'sv':
        require_once 'controller/sv_controller.php';
        break;
    default:
        echo 'ko tìm thấy controller phù hợp';
        break;

}
