<?php

  $host = "localhost";
  $dbname = "project";
  $dbuser = "postgres";
  $dbpass = "root";

  $con = pg_connect("host=$host 
                    dbname=$dbname 
                    user=$dbuser 
                    password=$dbpass")
        or die("Could not connect to server");

  if($con) {

  }else {
    echo "Error in Connecting...";
  }
?>
