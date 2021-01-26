<?php require 'admin/function/function.php'; ?>

<?php 

  if (isset($_POST['login'])) {
    login();
  }

 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <title>Multi User Login</title>
</head>
<body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
  






    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" id="login" autocomplete="off" class="fadeIn second" name="username" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
     <select name="level" >
       <option><p>-</p></option>
       <option value="admin">Admin</option>
       <option value="employee">Employee</option>
     </select>
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="register.php">Need an account?</a>
    </div>

  </div>
</div>
</body>
</html>