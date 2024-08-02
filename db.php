<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "crudapp";

  // connect to database
  $conn = new mysqli($servername, $username, $password, $dbname);
  //$result = $conn->query($sql);
  if($conn->connect_error){
    echo "connection failed.." . $conn_error();
  }

?>

