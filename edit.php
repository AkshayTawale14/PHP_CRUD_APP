<?php
   include 'db.php';

   $id = $_GET['id'];

   $sql = "SELECT name, email FROM customer WHERE id=$id";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();

   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE customer SET name='$name', email='$email' WHERE id=$id";
    //$sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if($conn->query($sql)===TRUE){
        echo "Record updated success";
    }
    else{
        echo "Error1 : " . $conn->error;
    }
    
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
    <div class="container my-5">
    <h3>Update Form</h3>
    <a type="button"  class="btn btn-success my-3" href="index.php">show Customers</a>
    <form  method="POST">
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
    </div>    
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="" name="email" value="<?php echo $row['email']; ?>">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>