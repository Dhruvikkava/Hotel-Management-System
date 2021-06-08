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
        .first{
            border-bottom:5px dashed orange;
        }
        .facilities{
            width:100%;
            height:500px;
            background-color:rgba(0, 0, 0, 0.096);
        }
        .facilities h2{
            padding-top:40px;
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
        <div class="container" style="padding-bottom: 40px;">
            <h2 class="font-weight-bold text-center m-5 text-uppercase text-warning">About Us</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-12 animate__animated animate__rotateInUpRight" style="animation-duration: 2s;>
                    <p class="text-justify p-3">When visiting Surat, you'll feel right at home at The Hotel Orange International(Hotel In Surat), 
                        which offers quality accommodation and great service. Only 50 m away, this hotel can be easily accessed from the Surat Railway station and Bus Station . Hotel Orange International(Hotel In Surat) is an excellent place to stay and you will be left with some beautiful memories.The service here is great and the staff is friendly and efficient.Also In Ziyafat Restaurant(Hotel In Surat) you can find the best food for eat.The food is excellent. Well furnished 52 Rooms With Attach Bath.TV with cable Channel Round the Clock. Direct dialing STD & ISD call. Round the Clock Room Services. 24 hours
                         Running Hot and Cold Water.Same day Laundry Services.Car on rent, Doctor on call.Special Security Devices & Fire Safety.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8 col-12 animate__animated animate__rotateInUpLeft" style="animation-duration: 2s;">
                    <img src="IMG_0066.JPG" style="width:100%;height:300px;border-radius: 20px;">
                    <p class="text-center">Each extra person which adults extra RS.800 more</p>
                </div>
            </div>
        </div>
</section>

<section>
        <div class="container-fluid facilities">
            <h2 class="font-weight-bold text-center  text-uppercase text-warning">services</h2>
            <div class="row font-weight-bold first">
                <div class="col-lg-3 col-md-3 col-sm-6" >
                    <i class="fa fa-check-circle-o"></i>
                    <h4>24 HOUR SERVICES</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" style="border-left: 5px dotted rgb(255, 123, 0);">
                    <i class="fa fa-cutlery"></i>
                    <h4>FREE BREAKFAST</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" style="border-left: 5px dotted rgb(255, 123, 0);">
                    <i class="fa fa-car"></i>
                    <h4>CAR PARKING</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" style="border-left: 5px dotted rgb(255, 123, 0);">
                    <i class="fa fa-wifi"></i>
                    <h4>FREE WIFI</h4>
                </div>
            </div>

            <div class="row font-weight-bold">
                <div class="col-lg-3 col-md-3 col-sm-6" >
                <i class="fa fa-stethoscope"></i>
                    <h4>DOCTORS ON CALL</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" style="border-left: 5px dotted rgb(255, 123, 0);">
                <i class="fa fa-heart"></i>
                    <h4>24 * 7 SECURITY</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" style="border-left: 5px dotted rgb(255, 123, 0);">
                <i class="fa fa-bus"></i>
                    <h4>TRANSPORT SERVICES</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" style="border-left: 5px dotted rgb(255, 123, 0);">
                <i class="fa fa-film"></i>
                    <h4>THEATRE FACILITIES</h4>
                </div>
            </div>
        </div>
    </section>
</body>
</html>