<?php
session_start();
$error="";
include_once("autoload.php");
$username=$password="";
if (isset($_POST['go'])) {
	extract($_POST);
	$users=users::login_users($username,$pass);
	if ($users['row_count'] >0) {
		$_SESSION['user_id']=$users['rows']['user_id'];
		$_SESSION['user_details']=$users['rows'];
		if ($role=="admin") {
			$_SESSION['role']='admin';
			echo "<script>window.location.href='admin_home.php';</script>";
		}
		if ($role=="barber") {
			$_SESSION['role']='barber';
			echo "<script>window.location.href='barber_home.php';</script>";
		}
	}else{
		$error="<div class='alert alert-danger'>FAILED TO LOGIN. username/password match incorrect</div>";
	}
}
?>
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | BARBERSHOP</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <!--<img class="brand" src="assets/img/bootstraper-logo.png" alt="bootstraper logo">-->
                        <h4>BARBER SHOP MS</h4>
                    </div>
                    <h6 class="mb-4 text-muted">MY ACCOUNT</h6>
                    <?php echo $error; ?>
                    <form action="" method="POST">
                        <div class="form-group text-left">
                            <label for="email">LOGIN AS:</label>
                            <select class="form-control" name="role" required>
                                <option>SELECT YOUR ROLE</option>
                                <option value="barber">BARBER</option>
                                <option value="admin">ADMINISTRATOR</option>
                            </select>
                        </div>
                        <div class="form-group text-left">
                            <label for="text">USERNAME</label>
                            <input type="email" class="form-control" placeholder="Enter Username" name="username" required>
                        </div>
                        <div class="form-group text-left">
                            <label for="password">PASSWORD</label>
                            <input type="password" class="form-control" placeholder="Password" name="pass" required>
                        </div>
                        <div class="form-group text-left">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember me on this device</label>
                            </div>
                        </div>
                        <button  type="submit" class="btn btn-primary shadow-2 mb-4" name="go">Login</button>
                    </form>
                    <p class="mb-2 text-muted">Forgot password? <a href="javascript:alert('contact admin/manager!');">Reset</a></p>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>