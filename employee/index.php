<?php 

session_start();
require 'function/auth.php';
$app_name = " Multi User Login | Emplofyee ";
$routes = (isset($_GET['r']))?$_GET['r']:"first";
switch ($routes) {
	case 'first': default: $title = $app_name; include 'first.php'; break;
	
}


 ?>