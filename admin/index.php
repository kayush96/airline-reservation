<?php require "../includes/db_config.php"?>
<?php include "includes/header.php" ?>
  <title>GammaFlight &dash; Admin Login</title>
</head>
<body>
  <div class="admin__wrapper">
    <div class="admin__login">
      <div class="admin_heading">
        <h1>Administrator Login</h1>
      </div>
      <form action="validations/admin_login_script.php" method="POST" class="admin_login">
      <div class="admin__input">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <input type="email" name="admin_email" id="admin_email" placeholder="Email Address" autocomplete="off" required>
      </div>
      <div class="admin__input">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" name="admin_pass" id="admin_pass" placeholder="Password" autocomplete="off" required>
      </div>
      <div class="admin__input">
        <p>
          <?php 
            if(isset($_GET['m1'])) {
              echo $_GET['m1'];
            }
          ?>
        </p>
      </div>
      <div class="admin__input">
        <button class="btn btn-login">LOGIN</button>
      </div>
      </form>
    </div>
  </div>
</body>
</html>
