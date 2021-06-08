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
       .box{
           margin-top:40px;
           margin-bottom:120px;
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
        <div class="container box">
        <h2 class="font-weight-bold m-5 text-center text-warning">ABOUT OUR RESTOURANT</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card">
                    <div class="card-body">
                        <img src="galary/food.jpg" style="width:100%;height:200px;">
                        <p class="text-center">Good food and Lunch facility available</p>
                    </div>          
                    </div> 
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card">
                    <div class="card-body">
                        <img src="galary/images (3).jpg" style="width:100%;height:200px;">
                        <p class="text-center">Good Badroom Facility available</p>
                    </div>          
                    </div> 
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="card">
                    <div class="card-body">
                        <img src="galary/images (8).jpg" style="width:100%;height:200px;">
                        <p class="text-center">Neat & Clean Surroundings , Quick Service</p>
                    </div>          
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <section class="video-div ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12  video ">
                    <iframe width="100%" height="450px" src="https://www.youtube.com/embed/CMhNB5tLvCA" style="border:2px solid yellow;box-shadow:0 0 5px 5px rgb(200, 255, 0);" title="YouTube video player"  frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 video-right">
                    <h3>QUALITY OF OUR RESTOURANT</h3>
                    <p>In Restaurant(Hotel In Surat) you can find the best food for eat.The food is excellent.</p>
                    <div id="accordion">

                        <div class="card">
                          <div class="card-header bg-warning">
                            <a class="card-link text-white font-weight-bold " data-toggle="collapse" href="#collapseOne">
                              Our Services
                            </a>
                          </div>
                          <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                All the services and amenities you have come to expect from 5-Star Hotel are right in the comfort of your own home.
                            </div>
                          </div>
                        </div>
                      
                        <div class="card">
                          <div class="card-header bg-warning">
                            <a class="collapsed card-link text-white font-weight-bold " data-toggle="collapse" href="#collapseTwo">
                              Best Restourant
                            </a>
                          </div>
                          <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                              We Provide Best Quality Food
                            </div>
                          </div>
                        </div>
                      
                        <div class="card">
                          <div class="card-header bg-warning">
                            <a class="collapsed card-link text-white font-weight-bold " data-toggle="collapse" href="#collapseThree">
                                Our Facility
                            </div>
                            </a>
                          </div>
                          <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                This hotel offers numerous on-site facilities to satisfy even 
                                the most discerning guest.All guest accommodations feature thoughtful amenities to ensure an unparalleled sense of comfort.
                          </div>
                        </div>
                      
                      </div>
                </div>
            </div>
        </div>
    </section>