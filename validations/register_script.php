<?php  
  session_start();
  require '../includes/db_config.php';
//variables to store user information
$fname = $_POST['fname'];
$fname = pg_escape_string($con, $fname);

$email = $_POST['email'];
$email = pg_escape_string($con, $email);

$password = $_POST['password'];
$password = pg_escape_string($con, $password);
$password = md5($password);

$phone = $_POST['phone'];
$phone = pg_escape_string($con, $phone);

//Regular expressions to check Email and Contact
$email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$phone_regex = "/^[789][0-9]{9}$/";

$user_role = "subscriber";
//Query to select email and phone of user

$select_query = "SELECT *  FROM user_info WHERE email = '$email' OR phone = '$phone'";
$select_query_result = pg_query($con, $select_query) or die(pg_last_error($con));
$select_rows = pg_num_rows($select_query_result);

if($select_rows != 0) {
  $error = "<span class='alert'>Email or Phone Already Exists</span>";
		header('location:../register.php?m1='.$error);
	} else if(!preg_match($email_regex, $email)) {
		$error = "<span class='alert'>Incorrect Email Id</span>";
		header('location:../register.php?m1='.$error);
	} else if(!preg_match($phone_regex, $phone)) {
		$error = "<span class='alert'>Incorrect Phone Number</span>";
		header('location:../register.php?m2='.$error);
} else {
  $insert_query = "INSERT INTO user_info(fname, email, password, phone, user_role) VALUES('$fname', '$email', '$password', '$phone', '$user_role')";

	$insert_query_result = pg_query($con, $insert_query) or die(pg_last_error($con));
	$user_id = pg_last_oid($insert_query_result);
  $_SESSION['u_id'] = $user_id;
  $_SESSION['email'] = $email;

  header("Location: ../index.php");

	pg_close($con);
}

?>
