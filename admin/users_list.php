<?php  
  session_start();
  require "../includes/db_config.php";
  if(!isset($_SESSION['email'])) {
    header("location: index.php");
  }
?>

<?php include "includes/header.php"; ?>

  <title>GammaFlight &dash; Users List</title>
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
          <li class="dash__link">
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
          <li class="dash__link active">
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
        <h1>User Details</h1>
      </div>
      <?php 
      
      $user_query = "SELECT * FROM user_info"; 
      $user_query_result = pg_query($con, $user_query) or die(pg_last_error($con));
      $total_rows = pg_num_rows($user_query_result);
      ?>
      <!--users table-->
      <div class="dash__table">
        <table class="content-table">
        <thead>
            <tr>
              <th>User Id</th>
              <th>Full Name</th>
              <th>Email Address</th>
              <th>Phone Number</th>
              <th>Registration Time</th>
              <th>User Role</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              while($row = pg_fetch_array($user_query_result)){
            ?>
            <tr>
              <td><?php echo $row['u_id']; ?></td>
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['reg_time']; ?></td>
              <td><?php echo $row['user_role']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
