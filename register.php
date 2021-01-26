<?php require 'admin/function/function.php'; ?>

<?php 

  if (isset($_POST['register'])) {
    register();
  }

 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <title>Register</title>
</head>
<body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Register </h2>
  






    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" id="login" autocomplete="off" class="fadeIn second" name="username" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="text" id="password" class="fadeIn third" name="name" placeholder="name">
     <select name="level" >
       <option><p>-</p></option>
       <option value="admin">Admin</option>
       <option value="employee">Employee</option>
     </select>
      <input type="submit" class="fadeIn fourth" name="register" value="Create My Account">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      
    </div>

  </div>
</div>
</body>
</html>