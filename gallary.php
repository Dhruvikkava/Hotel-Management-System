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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="style001.css">
    </head>
    <style>
        .container{
            background-color:pink;
        }
        .card{
            margin:10px;
            border-radius:10px;
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

    <section>
    <h2 class="text-center font-weight-bold text-warning m-5">GALLARY</h2>
        <div class="container ">
            
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInLeft" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/download (2).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/download.jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInRight" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images.jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInLeft" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (2).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (3).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInRight" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (4).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInLeft" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (5).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (6).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInRight" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (7).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInLeft" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (8).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (9).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInRight" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (10).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInLeft" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (11).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (12).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInRight" style="animation-duration: 2s;">
                    <div class="card-body">
                        <img src="galary/images (13).jpg" style="width:100%;height:250px;">
                    </div>          
                    </div> 
                </div>
        </div>
    </section>
</body>
</html>