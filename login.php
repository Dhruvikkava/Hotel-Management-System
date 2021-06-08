<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lancelot&family=Petrona:wght@200&display=swap" rel="stylesheet">
    <title>Hotel Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="style001.css">
    </head>
    <style>
       .container{
           margin-top:40px;
           font-weight:bold;
       }
    </style>

<body>
    <header>
    <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                <a class="navbar-brand " href="#"><i class="fa fa-bars mr-2"></i>HotelEnclave</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="rooms.php">Rooms <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="gallary.php">Gallary<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="restaurant.php">Restaurant <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item dropdown ">
                    
                    <li class="nav-item active ">
                        <a class="nav-link" href="contact.php">contact us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LOGIN
                    </a>
                    <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdown" >
                        <a class="dropdown-item" href="login.php">LOGIN</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="signup.php">SIGN UP</a>                        
                    </div>
                    </li>
                    
                </ul>
                
                </div>
            </nav>
    </header>



<div class="container">
  <h2 class="font-weight-bold text-center">LOGIN </h2>
  <form method="POST">
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="password"><a href="#">Forgot Password..??</a></label>
      
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>


<?php
    include 'conn.php';

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $selectquery = "SELECT * FROM `signup` WHERE email='$email'";
        $query = mysqli_query($con,$selectquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount)
        {
            $pass = mysqli_fetch_array($query);
            $dbpass = $pass['password'];
            $_SESSION['username'] = $pass['username'];

            $passdecode = password_verify($password,$dbpass);

            if($passdecode)
            {
                ?>
            <script>
                alert("login successful");
                location.replace('home2.php');
            </script>
            <?php
            }
            else{
                ?>
            <script>
                alert("password wrong");
            </script>
            <?php
            }
        }
        else{
            ?>
            <script>
                alert("Email not exist");
            </script>
            <?php
        }
    }
?>