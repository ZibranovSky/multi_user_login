<?php require '../admin/function/function.php'; ?>
<?php foreach (select_employee() as $emp): ?>
<title><?=$title;?></title>
<h1>Welcome <strong style="color: blueviolet;"><?=$emp['name'];?></strong> You Logged In As Employee</h1>
	
<a href="function/logout.php">Logout</a>	
<?php endforeach ?>
