<?php
if(!isset($_SESSION['username']))
{
    header('location:home.php');
}
?>
<?php
    include 'conn.php';

    $id = $_GET['idth'];

    $delete = "DELETE FROM `bookroom` WHERE `date_of_booking` = '$id'";
    $query = mysqli_query($con,$delete);

    header('location:notification.php');

?>