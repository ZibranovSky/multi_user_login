<?php 


session_start();
unset($_SESSION['idlogin']);
unset($_SESSION['usernamelogin']);
header("location: ../");


 ?>