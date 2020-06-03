<?php 
	session_start();

	// variable declaration
	$email    = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost:3306', 'root', 'TakudzwaSiyabonga@21761', 'zansci_users');
 if (empty($email)) 
             { 
 echo $password_1."Email is required".$password_2;
                array_push($errors, "Email is required"); 
                }
		if (empty($password_1)) 
                { 
 echo $password_1."Password is required".$password_2;
                 array_push($errors, "Password is required"); 
                }
		if ($password_1 != $password_2) 
                 {
 echo $password_1."The two passwords do not match".$password_2;
		 array_push($errors, "The two passwords do not match");
		 }
     if (count($errors) == 0) {

 echo $password_1."Correct password wow!".$password_2;
  $password=md5($password_1);
			$query = "INSERT INTO registered_users ( email, password) 
					  VALUES('$email','$password' )";
			mysqli_query($db, $query);
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	/**

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password_1 = md5($password_1);
			$query = "SELECT * FROM registered_users  WHERE email='$email' AND password='$password_1'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}**/

?>