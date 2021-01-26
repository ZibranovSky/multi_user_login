<?php 
// connection
$conn = mysqli_connect('localhost','root','','multi_user_login');


// Select Admin
function select_admin()
{
	global $conn;
	$id = $_SESSION['idlogin'];
	return mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
}


// Select employee
function select_employee()
{
	global $conn;
	$id = $_SESSION['idlogin'];
	return mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
}

// register an account

function register()
{
	global $conn;
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$name = $_POST['name'];
	$level = $_POST['level'];

	$save = mysqli_query($conn, "INSERT INTO users SET username='$username', password='$password', name='$name', level='$level'");
	if ($save) {
		echo '<script>alert("Your Account Has Been Created!")</script>';
	}else{
		echo '<script>alert("Whoops...")</script>';

	}
}

// ----------------------------------------KEEP IT BELOW------------------------------------------------------------

function login()
{
	global $conn;
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];

	// Find Username and Password
	$select = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
	$find = mysqli_num_rows($select);

	if ($find > 0 )  {
		$r = mysqli_fetch_array($select);

		if ($r['level'] == 'admin') {
			if ($level == 'admin') {
				session_start();
				$_SESSION['idlogin'] = $r['id'];
				$_SESSION['usernamelogin'] = $r['username'];
				header("location: admin/index.php?r=first");
			}
		}else if($r['level'] == 'employee'){
			if ($level == 'employee') {
				session_start();
				$_SESSION['idlogin'] = $r['id'];
				$_SESSION['usernamelogin'] = $r['username'];
				header("location: employee/index.php?r=first");
			}
		}
	}else{
			echo '<script>alert("Whoops..")</script>';
		}
}

 ?>