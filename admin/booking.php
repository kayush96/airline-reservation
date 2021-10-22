<?php  
  session_start();
  require "../includes/db_config.php";
  if(!isset($_SESSION['email'])) {
    header("location: index.php");
  }
?>

<?php include "includes/header.php"; ?>

  <title>GammaFlight &dash; Booking Dashboard</title>
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
          <li class="dash__link ">
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
          <li class="dash__link active">
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
        <h1>Booking Details</h1>
      </div>
    </div>
  </div>
</body>
</html>
