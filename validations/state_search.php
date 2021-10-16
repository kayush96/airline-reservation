<?php 
  require '../includes/db_config.php';

  if(isset($_POST["query"])) {

    $output = '';
    $query = "SELECT * FROM location WHERE s_name LIKE '%".$_POST["query"]."%'";
    $result = pg_query($con, $query);
    $output = '<ul class="list-unstyled">';
    if(pg_num_rows($result) > 0) {
        while($row = pg_fetch_array($result)) {
          $output .= '<li>'.$row["s_name"].'<li>';
        }
    } else {
      $output .= '<li>State not found!</li>';
    }
    $output .= '</ul>';
    echo $output;
  }

?>
