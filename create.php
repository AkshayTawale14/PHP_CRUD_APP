<?php
  include 'db.php';

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<h2>seconds..</h2>";
    $sql = "INSERT INTO customer (name, email) VALUES ('$name','$email')";
    if($conn->query($sql)===TRUE){

        echo "Record added success...<h1>success</h1>";
    
    }
    else{
        echo "soething is error.." . $conn->error;
    }

    echo "<h2>Three..</h2>";
    $conn->close();
    header("location: /demo/index.php");
    exit;

  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <a type="button"  class="btn btn-success my-3" href="index.php">Show Customers</a>
    <form method="POST">
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="">
    </div>    
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="" name="email" value="">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>