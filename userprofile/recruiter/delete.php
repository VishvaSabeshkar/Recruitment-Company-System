<?php
    include 'connection.php';

    $rid=$_GET['rid'];

    $query="DELETE FROM recruiter WHERE rid='$rid'";
    $data=mysqli_query($con,$query);

    if($data)
    {
        header("Location:../../homepage/relogout.php");
    }
    else
    {
        echo "Delete unSuccessfully"; 
    }
?>