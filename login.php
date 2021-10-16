<?php 
  session_start();
  require 'includes/db_config.php';
  if(isset($_SESSION['email'])) {
    header('location: index.php');
  }
?>

<?php include 'includes/header.php'?>
  <title>GammaFlight &dash; Login</title>
</head>
<body>
  <div class="login__container">
    <!--Login page heading-->
    <div class="login__heading">
      <a href="index.php">
        <img src="assets/img/logo_main.png" alt="">
      </a>
    </div>
    <!--Login form-->
    <div class="login__form">
      <div class="login__title">
        <h1>Login to your account!</h1>
        <p>Welcome back</p>
      </div>

      <form action="validations/login_script.php" method="POST" class="login_form">
        <div class="login__field">
          <i class="fa fa-envelope" aria-hidden="true"></i>
					<input type="email" id="email" name="email" class="form_input" autocomplete="off" placeholder="Email Address" required>
        </div>

        <div class="login__field">
          <i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" id="password" name="password" class="form_input" placeholder="Password" required autocomplete="off">
        </div>
        <div class="checkbox_login">
					<input type="checkbox" id="remember" name="remember" value="remember"> 
					<label for="remember">Remember me</label>
				</div>			
        <div class="login_error">
          <p><?php 
                if(isset($_GET['m1'])) {
                  echo $_GET['m1'];
                } 
              ?>
          </p>
        </div>		
				<button type="submit" class="btn btn-login-primary">LOGIN</button>
      </form>
      <div class="register_account">
				<p>Don't have an account? <a href="register.php">Register here</a></p>
			</div>
    </div>
  </div>
<?php include 'includes/footer.php'?>
