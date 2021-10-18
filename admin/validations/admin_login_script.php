<?php 
  session_start();

  require "../../includes/db_config.php";

  $email = $_POST['admin_email'];
  $email = pg_escape_string($con, $email);

  $password = $_POST['admin_pass'];
  $password = pg_escape_string($con, $password);
  $password = md5($password);
  $login_query = "SELECT * FROM user_info
                  WHERE email='$email' AND password='$password'";
  $login_query_result = pg_query($con, $login_query) or die(preg_last_error($con));

  $total_rows_fetched = pg_num_rows($login_query_result);
  if($total_rows_fetched != 0) {
    $row = pg_fetch_array($login_query_result);

    if($row['user_role'] == "admin"){
      $_SESSION['email'] = $email;
      $_SESSION['u_id'] = $row['u_id'];
       header("location:../dashboard.php");
    }
  }
  //else show error 'Invalid Credentials'
  else {
    $error = "<span class='alert'>Admin Credentials Error</span>";
    header("location:../index.php?m1=".$error);
   }

?>
