<?php 
  session_start();
  include 'includes/db_config.php';
  // if(!isset($_SESSION['email'])) {
  //   header("location: index.php");
  // }
?>

<?php include 'includes/header.php'?>
  <title>GammaFlight &dash; Search Results</title>
</head>
<body>
    <div class="navbar__wrapper">
      <div class="navbar">
        <!--Brand Logo-->
        <div class="brand">
          <img src="assets/img/favicon.png" class="brand__img" alt="brand_logo">
          <a href="index.php" class="brand-a">
            <div class="brand__heading">
              <h1><span>GAMMA</span>FLIGHT</h1>
            </div>  
          </a>        
        </div>
        <!--navigation links-->
        <?php if(isset($_SESSION['email'])) { ?>
        <div class="nav__links">
          
          <div class="nav__item">
            <a href="check_status.php">Check status</a>
          </div>
          <p class="divider">|</p>
          <div class="nav__item">
            <a href="user_profile.php">Profile</a>
          </div>
          <div class="nav__item">
            <a href="validations/logout_script.php">
              <button class="btn btn-primary">Logout</button>
            </a>
          </div>

        </div>
        <?php }  else { ?>
          <div class="nav__links">
            <div class="nav__item">
               <a href="#">Check status</a>
            </div>
          <p class="divider">|</p>
          <div class="nav__item">
            <a href="register.php">Register</a>
          </div>
          <div class="nav__item">
            <a href="login.php">
              <button class="btn btn-primary">Login</button>
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
    <!--Flight Seach Wrapper-->
  <div class="sp__wrapper">
    <div class="sp__header">
        <div class="sp__box">
          <div class="sp__input">
            <i><img src="assets/img/takeoff.png" alt=""></i>
            <input type="text" name="sp_departure" id="sp_departure" placeholder="Departure">
          </div>
          <div class="sp__input">
            <i><img src="assets/img/landing.png" alt=""></i>
            <input type="text" name="sp_arrival" id="sp_arrival" placeholder="Arrival">
          </div>
          <div class="sp__input">
            <i><img src="assets/img/calendar.png" alt=""></i>
            <input type="text" name="sp_departure_date" id="sp_departure_date" placeholder="Departure Date">
          </div>
          <div class="sp__input">
            <i><img src="assets/img/calendar.png" alt=""></i>
            <input type="text" name="sp_arrival_date" id="sp_arrival_date" placeholder="Return Date">
          </div>
          <div class="sp__input">
            <button class="btn btn-sp-primary">MODIFY</button>
          </div>
        </div>

    </div>
  </div>

<?php include 'includes/footer.php'?>
