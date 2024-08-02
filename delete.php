<?php
   include 'db.php';

   $id = $_GET['id'];

   $sql = "DELETE FROM customer WHERE id=$id";
   //$result = $conn->query($sql);

   if($conn->query($sql)===TRUE){
     echo "Record deleted success...";
   }
   else{
    die("Connection failed: " . $conn->connect_error);
   }

   header("location : /demo/index.php");

?>