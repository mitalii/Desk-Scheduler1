<?php
session_start();
include("include/config.php");

//echo mysqli_error($con);

/*Add User Profile Code*/
if (isset($_POST["addUser"])) 
{
  $username = $_POST['username'];
  $name = $_POST['name'];
  $password = $_POST['password'];

  $password = md5($password);

  $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO user VALUES (0, '$username', '$name', '$password', '$created_at')";

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "User Successfully Added..!!";
        header("location:users.php"); 
    }
    else
    {
       /* $_SESSION['error'][] = "Unable to Add Partner Profile";
        header("location:partner.php"); */
        echo mysqli_error($con);
    } 

}

/*Add Desk Code*/
if (isset($_POST["addId"])) 
{
  $deskName = $_POST['deskName'];
  $deskId = $_POST['deskId'];
 

  $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO desk VALUES (0, '$deskName', '$deskId', '$created_at')";

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Desk Successfully Added..!!";
        header("location:desk.php"); 
    }
    else
    {
       /* $_SESSION['error'][] = "Unable to Add Partner Profile";
        header("location:partner.php"); */
        echo mysqli_error($con);
    } 

}


/*Delete Booking Code*/
if(isset($_POST['delBooking']))
{
    $id = $_POST['id'];

    $sql = "DELETE FROM booking WHERE booking_id='$id' ";
    //echo $sql;
    //die();
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Booking Successfully Deleted..!!";
        header("location:booking.php"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Delete";
        header("location:booking.php"); 
    }
}

?>