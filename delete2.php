<?php
if(!isset($_SESSION['username']))
{
    header('location:home.php');
}
?>
<?php
    include 'conn.php';

    $id = $_GET['dateth'];

    $delete = "DELETE FROM `menu of items` WHERE `date` = '$id'";
    $query = mysqli_query($con,$delete);

    header('location:notification.php');

?>