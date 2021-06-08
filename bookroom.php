<?php
    session_start();
?>
<?php
if(!isset($_SESSION['username']))
{
    header('location:home.php');
}
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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="style001.css">
    <style>
        .slidebar{
            float:left;
            width:270px;
            height: 50vh;
            background-color: rgba(21, 255, 0, 0.342);
            
        }
        .slidebar a{
            display: block;
            line-height: 60px;
            text-transform: uppercase;
            margin:0 35px;
            text-decoration: none;
            color: white;
        }
        
        .slidebar i,span{
            margin-right:10px;
            font-size:18px;
            color:lightgray;
        }
        .centerdiv{
            text-align: center;
        }
        .bookroom{
            margin-left:400px;
            
            width:400px;
            height:550px;
            background:rgba(100, 148, 237, 0.418);
        }
        input[type="date"]{
            margin-left:10px;
        }
        
    </style>
</head>
<body>
    <div class="header font-weight-bold">
        
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid" fixed-top>
                
            <div class="navbar-brand bar" >HotelEnclave</div>
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
        
                
            </ul>
            </div>
            </div>
        </nav>
        
        <div class="slide">
            <div class="slidebar animate_bounceInLeft " >
                    <a href="#" class="animate__animated animate__backInLeft" ><i class="fa fa-user-circle-o mr-2"></i><span ><?php echo $_SESSION['username'];?></span></a>
                    <a href="bookroom.php" class="animate__animated animate__backInLeft" ><i class="fa fa-delicious mr-2 "></i><span >Book Room</span></a>
                    <a href="apointment.php" class="animate__animated animate__backInLeft" ><i class="fa fa-comments mr-2 "></i><span >Menu Of Items</span></a>
                    <a href="notification.php" class="animate__animated animate__backInLeft" ><i class="fa fa-info-circle mr-2 "></i><span >Notification</span></a>
                    <a href="logout.php" class="animate__animated animate__backInLeft" ><i class="fa fa-arrow-circle-o-left mr-2 "></i><span >Logout</span></a>
                
            </div>

            <div class="bookroom text-white px-3 animate__animated animate__bounceInRight" style="animation-duration: 3s;">
                <form method="POST">
                    <h2 class="px-5 py-3">Room Booking</h2>
                    <div class="booking">
                    

                    <div class="form-group" style="width:330px">
                        
                        <select class="form-control" id="sel1" name="roomname">
                            <option>Select Type of room:</option>
                            <option>Executive Double Bed</option>
                            <option>Deluxe Double Bed</option>
                            <option>Executive KingBed</option>
                            <option>Deluxe King Bed</optioon>
                            
                        </select>
                    </div>
                    <div class="form-group" style="width:330px">
                        
                        <select class="form-control" id="sel1" name="selectrooms">
                            <option>Select list of rooms:</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                        </div>
                    
                    <div class="form-group" style="width:330px">
                        <input type="number" class="form-control" placeholder="Enter no. of person (max. 2 each room)" name="number" min="1" max="2">
                    </div>
                    <div class="form-group" style="width:330px">
                        
                        <select class="form-control" id="sel1" name="gender">
                            <option>Gender:</option>
                            <option>Male</option>
                            <option>Female</option>
                            
                        </select>
                    </div>

                    <div class="form-group" style="width:330px">
                        
                        <select class="form-control" id="sel1" name="price">
                            <option>Select Price of rooms:</option>
                            <option>Rs.1000</option>
                            <option>Rs.1500</option>
                            <option>Rs.2000</option>
                            <option>Rs.2500</option>
                            <option>Rs.3000</option>
                            <option>Rs.6000</option>
                        </select>
                    </div>
                    <div class="form-group" style="width:330px">
                        
                        <select class="form-control" id="sel1" name="floor">
                            <option>Select Floor:</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            
                        </select>
                    </div>
                    <div class="form-group " style="width:330px">
                       DATE OF BOOKING: <input  type="date" name="dob">
                    </div>
                    
                    <button class="btn bg-warning float-right my-3" type="submit" name="sub">SUBMIT</button>
                </form>
            </div>
        </div>
        
    </div>
</head>
</html>

<?php
    include 'conn.php';

    if(isset($_POST['sub']))
    {
        $dob = $_POST['dob'];
        $roomname = $_POST['roomname'];
        $selectrooms = $_POST['selectrooms'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];
        $price = $_POST['price'];
        $floor = $_POST['floor'];

        $insertquery = "INSERT INTO `bookroom`(`date_of_booking`,`roomname`, `rooms`, `person`, `gender`, `price of rooms`, `floor`) 
                        VALUES ('$dob','$roomname','$selectrooms','$number','$gender','$price','$floor')";
        $query = mysqli_query($con,$insertquery);

        if($query)
            {
                ?>
            <script>
                alert("Booking successful");
            </script>
            <?php
            }
        else{
            ?>
            <script>
                alert("Booking not successful");
            </script>
            <?php
            }
    }
?>