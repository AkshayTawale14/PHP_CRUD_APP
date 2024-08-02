<?php
   include 'db.php';
   if($conn->connect_error){
    echo "connection failed" . $conn->connect_error;
   }

   $sql = "SELECT * FROM customer";
   $result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <div class="container my-5">
    <a type="button"  class="btn btn-success my-3" href="create.php">Add Customer</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">DATE</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row=$result->fetch_assoc()){
        echo '
    <tr>
      <th scope="row">'.$row["id"].'</th>
      <td>'.$row["name"].'</td>
      <td>'.$row["email"].'</td>
      <td>'.$row["ctdate"].'</td>
      <td>
          <a type="button" class="btn btn-primary my-3" href="edit.php?id='.$row["id"].'">Edit:'.$row["id"].'</a>
           <a type="button" class="btn btn-danger my-3" href="delete.php?id='.$row["id"].'">Delete</a>
      </td>
    </tr>        
        ';
    }
    ?>
    
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>