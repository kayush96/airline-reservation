<?php 
  session_start();
  include 'includes/db_config.php';
  if(!isset($_SESSION['email'])) {
    header("location:index.php");
  }
?>

<?php include 'includes/header.php'?>
  <title>GammaFlight &dash; User Profile</title>
</head>
<body>
  


<?php include 'includes/footer.php'?>
