<?php  
  session_start();
  require "../includes/db_config.php";
  if(!isset($_SESSION['email'])) {
    header("location: index.php");
  }
?>

<?php include "includes/header.php"; ?>

  <title>GammaFlight &dash; Admin Dashboard</title>
</head>
<body>
  <div class="dash__wrapper">
    <!--Sidebar-->
    <div class="dash__sidebar">
      <div class="dash__logo">
        <a href="dashboard.php">
          <img src="../assets/img/logo3.png" alt="logo">
        </a>
      </div>

      <div class="dash__pages">
        <ul>
          <li class="dash__link active">
            <i class="fa fa-home" aria-hidden="true"></i>
            <a href="dashboard.php">Home</a>
          </li>
          <li class="dash__link">
            <i class="fa fa-plane" aria-hidden="true"></i>
            <a href="flights.php">Flights</a>
          </li>
          <li class="dash__link">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <a href="airport.php">Airports</a>
          </li>
          <li class="dash__link">
            <i class="fa fa-ticket" aria-hidden="true"></i>
            <a href="booking.php">Booked</a>
          </li>
          <li class="dash__link">
            <i class="fa fa-users" aria-hidden="true"></i>
            <a href="users_list.php">Users</a>
          </li>
        </ul>
      </div>

      <div class="dash__logout">
      <a href="validations/logout_script.php">
          <button class="btn btn-primary">
            <i class="fa fa-power-off" aria-hidden="true"></i>
             Sign out
          </button>
        </a>
      </div>
    </div>

    <!--Main Content-->
    <div class="dash__main">
      <div class="dash__heading">
        <h1>Admin Dashboard</h1>
      </div>

      <div class="dash__details">
        <div class="detail__container">
          <?php
          $user_query = "SELECT * FROM user_info";
          $user_query_result = pg_query($con, $user_query);
          $t_user_rows = pg_num_rows($user_query_result);          
          ?>
          <i class="fa fa-users" aria-hidden="true"></i>
          <span>Users</span>
          <p><?php echo $t_user_rows; ?></p>
        </div>
        <div class="detail__container">
          <?php 
            $airport_query = "SELECT * FROM location";
            $airport_query_result = pg_query($con, $airport_query);
            $t_airport_rows = pg_num_rows($airport_query_result); 
          ?>
        <i class="fa fa-globe" aria-hidden="true"></i>
          <span>Locations</span>
          <p><?php echo $t_airport_rows; ?></p>
        </div>
        <div class="detail__container">
        <i class="fa fa-plane" aria-hidden="true"></i>
          <span>Flights</span>
          <p>100</p>
        </div>
        <div class="detail__container">
        <i class="fa fa-ticket" aria-hidden="true"></i>
          <span>Bookings</span>
          <p>50</p>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
</body>
</html>
