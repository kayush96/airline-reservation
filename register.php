<?php 
session_start();
  require 'includes/db_config.php';
  if(isset($_SESSION['email'])) {
    header('location: index.php');
  }
?>

<?php include 'includes/header.php'?>
  <title>GammaFlight &dash; Create an Account</title>
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
    <div class="register__form">
      <div class="login__title">
        <h1>Don't Have an Account?</h1>
        <p>Sign up to Explore</p>
      </div>
      <!--Register-Form-->
      <form action="validations/register_script.php" method="POST" class="login_form">
        <div class="login__field">
        <i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" id="fname" name="fname" class="form_input" maxlength="25" autocomplete="off" placeholder="Full Name" required>
        </div>

        <div class="login__field">
          <i class="fa fa-envelope" aria-hidden="true"></i>
					<input type="email" id="email" name="email" class="form_input" autocomplete="off" placeholder="Email Address" required>
        </div>

        <div class="login__field">
        <i class="fa fa-phone" aria-hidden="true"></i>
					<input type="phone" id="phone" name="phone" class="form_input" maxlength="10" placeholder="Contact" required autocomplete="off">
        </div>

        <div class="login__field">
          <i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" id="password" name="password" class="form_input" placeholder="Password" required autocomplete="off">
        </div>
        			
        <div class="login_error">
          <p><?php if(isset($_GET['m1'])){
							echo $_GET['m1'];
						}
					?></p>
          <p>
          <?php 
					 if(isset($_GET['m2'])) {
					 	echo $_GET['m2'];
					 }
					?>
          </p>
        </div>		
				<button type="submit" class="btn btn-login-primary">Create Account</button>
      </form>
      <div class="register_account">
				<p>Already have an account? <a href="login.php">Sign in</a></p>
			</div>
    </div>
  </div>

<?php include 'includes/footer.php'?>
