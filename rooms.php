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
    <style>
        section{
            margin-top:60px
        }
        .roompart{
            margin:40px 0;
        }
        .roompart-middle .middle{
            box-shadow: 0 0 10px 10px orange;
        }
        .roompart .last{
            box-shadow: 0 0 10px 10px blue;
        }
    </style>
</head>


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
        <div class="container">
            <h2 class="text-center font-weight-bold text-warning m-5 animate__animated animate__fadeInDown">ROOMS</h2>
            <div class="row roompart">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="card animate__animated animate__fadeInRight" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="dd.jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe King Bed
                             Rs. 2430</h4>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInRight" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="download.jpg" alt="Card image" style="height:165px">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInLeft" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="dd.jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card animate__animated animate__fadeInLeft" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="download (1).jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row roompart roompart-middle">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="card middle animate__animated animate__fadeInRight" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="dd.jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe King Bed
                             Rs. 2430</h4>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="card middle animate__animated animate__fadeInRight" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="dd.jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="card middle animate__animated animate__fadeInLeft" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="download (1).jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="card middle animate__animated animate__fadeInLeft" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="dd.jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row roompart">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card last animate__animated animate__fadeInRight" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="download (1).jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe King Bed
                             Rs. 2430</h4>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card last animate__animated animate__fadeInRight" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="download.jpg" alt="Card image" style="height:165px">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card last animate__animated animate__fadeInLeft" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="dd.jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card last animate__animated animate__fadeInLeft" style="width:250px;animation-duration: 2s;">
                        <img class="card-img-top" src="download (1).jpg" alt="Card image">
                        <div class="card-body">
                        <h3 class="card-title">Deluxe Double Bed
                             Rs. 3150</h3>
                        <p class="card-text text-center">For Booking Please Contact on +919512132001</p>
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>
    </section>
</body>
</html>