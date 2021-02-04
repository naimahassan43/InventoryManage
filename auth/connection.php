<?php
 
  $db = mysqli_connect("localhost","root","","inventory_manage");
  if($db){
    echo "Database Connected";
  }
  else{
    die("MySQLi Error". mysqli_error($db));
  }

?>