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
  <div class="ad__wrapper">
    <div class="ad__sidebar">
      Sidebar
    </div>

    <div class="ad__main">
        <h1>Main</h1>Main content
    </div>
  </div>
</body>
</html>
