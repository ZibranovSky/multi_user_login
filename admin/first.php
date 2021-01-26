<?php require 'function/function.php'; ?>
<?php 
	foreach (select_admin() as $adm):
 ?>
 <title><?=$title;?></title>
<h1>Welcome <strong style="color: green;"><?=$adm['name'];?></strong>, You Logged In As Admin</h1><br>


<a href="function/logout.php">LOGOUT</a>
<?php endforeach; ?>