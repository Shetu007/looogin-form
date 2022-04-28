  <?php
    $showAlert = false;
    $showError = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exits = false;
    
    if (($password == $cpassword) && $exists==false) {
      $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', ' $password', current_timestamp())";
      $result = mysqli_query($conn, $sql);

      if ($result){
        $showAlert = true;
      }
      else {$showError = "password do not match";}
    }

  }



  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
   if($showAlert) {
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account is now created and you can log in.
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden= "true"> $times;</span>
    </button>
    </div> ';
  } 
   
      if($showError) {
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showError.'.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden= "true"> $times;</span>
    </button>
    </div> ';
  } 
   ?>

    <div class="container my-4">
       <h1 class="text-center">Signup to our website</h1>
       
       <form action="/loginsystem/signup.php" method="post">
  <div class="form-group col-md-8">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group col-md-8">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  <div class="form-group col-md-8">
    <label for="CPassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="CPassword" name="CPassword">
    <small id="emailHelp" class="form-text">Please make sure to type the same password.</small  >
  </div>
 
  <button type="submit" class="btn btn-primary">Signup</button>
 </form>
       
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>