
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
            margin-left:280px;
            
            width:auto;
            height:auto;
            background:rgba(100, 148, 237, 0.418);
        }
        input[type="date"]{
            margin-left:10px;
        }
        table,th,td{
            border: 2px solid green;
            border-collapse:collapse;
            background-color:rgba(137, 43, 226, 0.479);
        }
        th{
            background-color: rgba(210, 105, 30, 0.507);
        }
        th,td{
            padding:10px 15px;
            text-align:center;
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

            <div class="bookroom text-white px-3 animate__animated animate__bounceInRight" style="animation-duration: 3s;overflow:hidden">
                <h2 style="padding-top:20px;">Details for Room Booking:</h2>
                <div class="table-responsive">
                    <table>
                        <thead class="text-uppercase">
                            <tr>
                                <th>date </th>
                                <th>username </th>
                                <th>roomname</th>
                                <th>rooms</th>
                                <th>person</th>
                                <th>gender</th>
                                <th>price of rooms</th>
                                <th>floor</th>
                                <th colspan="2">operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'conn.php';

                                $selectquery = "SELECT * FROM `bookroom` ";
                                $query = mysqli_query($con,$selectquery);
                                $nums = mysqli_num_rows($query);

                               while( $res= mysqli_fetch_array($query))
                               {
                                   ?>
                                    <tr>
                                        <td><?php echo $res['date_of_booking']?></td>
                                        <td><?php echo $_SESSION['username'];?></td>
                                        <td><?php echo $res['roomname']?></td>
                                        <td><?php echo $res['rooms']?></td>
                                        <td><?php echo $res['person']?></td>
                                        <td><?php echo $res['gender']?></td>
                                        <td><?php echo $res['price of rooms']?></td>
                                        <td><?php echo $res['floor']?></td>
                                        <td><a href="bookroom2.php?id=<?php echo $res['date_of_booking'];?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE!"><i class="fa fa-edit " style="color:pink;"></i></a></td>
                                        <td><a href="delete.php?idth=<?php echo $res['date_of_booking'];?>" data-toggle="tooltip" data-placement="bottom" title="DELETE!"><i class="fa fa-trash " style="color:red"></i></a></td>
                                    </tr>
                                    <?php
                               }
                            ?>

                            
                        </tbody>
                     </table>
            <table>
                <h2 class="my-4">Details for Menu:</h2>
                <div class="table-responsive">
                    <table>
                        <thead class="text-uppercase">
                            <tr>
                                <th>date </th>
                                <th>username </th>
                                <th>breakfast</th>
                                <th>lunch</th>
                                <th >dinner</th>
                                <th colspan="2">operation</th>
                                
                            </tr>
                        </thead>
                        <tbody >
                            <?php
                                include 'conn.php';

                                $selectquery = "SELECT * FROM `menu of items`";
                                $query = mysqli_query($con,$selectquery);
                                $nums = mysqli_num_rows($query);

                               while( $res= mysqli_fetch_array($query))
                               {
                                   ?>
                                    <tr>
                                        <td class="text-uppercase"><?php echo $res['date']?></td>
                                        <td><?php echo $_SESSION['username'];?></td>
                                        <td class="text-uppercase"><?php echo $res['breakfast']?></td>
                                        <td class="text-uppercase"><?php echo $res['Lunch']?></td>
                                        <td class="text-uppercase"><?php echo $res['Dinner']?></td>
                                        
                                        <td><a href="apointment2.php?date=<?php echo $res['date']?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE!"><i class="fa fa-edit " style="color:pink"></i></a></td>
                                        <td><a href="delete2.php?dateth=<?php echo $res['date']?>" data-toggle="tooltip" data-placement="bottom" title="DELETE!"><i class="fa fa-trash " style="color:red"></i></a></td>
                                    </tr>
                                    <?php
                               }
                            ?>

                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>