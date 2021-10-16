<?php
  session_start();
  require '../includes/db_config.php';

  //Variables to store form data
  $email = $_POST['email'];
  $email = pg_escape_string($con, $email);

  $password = $_POST['password'];
  $password = pg_escape_string($con, $password);
  $password = md5($password); //md5 algorithm for password encryption

  //Login Query
  $login_select_query = "SELECT u_id, email FROM user_info 
  WHERE email = '$email' AND password = '$password'";

  $login_select_query_result = pg_query($con, $login_select_query) or die(pg_last_error($con));
  $total_rows_fetched = pg_num_rows($login_select_query_result);

  //If row is fetched then start session and redirect to homepage.
  if($total_rows_fetched != 0) {
    $row = pg_fetch_array($login_select_query_result);
    $_SESSION['email'] = $email;
    $_SESSION['u_id'] = $row['u_id'];
    header("location:../index.php");
  }
  //else show error 'Invalid Credentials'
  else {
    $error = "<span class='alert'>Invalid Credentials</span>";
    header("location:../login.php?m1=".$error);
   }

?>
