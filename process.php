<?php 
session_start();
include("includes/config.php");

/*Add Partner Profile Code*/
if (isset($_POST["assignDesk"])) 
{
  $empName = $_POST['empName'];
  $deskName = $_POST['deskName'];
  $bookingDate = $_POST['bookingDate'];

  $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO booking VALUES (0, '$empName', '$deskName', '$bookingDate', 1, '$created_at')";
    //echo $sql; die();
    $query = mysqli_query($con, $sql);

    if($query)
    {
        echo '<script>';
        echo 'alert("Booked Successfully.")';
        echo '</script>';
        echo("<script>window.location = 'logout.php';</script>");
    }
    else
    {
        echo mysqli_error($con);
    } 

}

?>