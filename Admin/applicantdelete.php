<?php
    include 'connection.php';

    $applicant_id=$_GET['applicant_id'];

    $query="DELETE FROM applicant WHERE applicant_id='$applicant_id'";
    $data=mysqli_query($con,$query);

    if($data)
    {
        
        header("Location:adminHome.php");
    }
    else
    {
        echo "Delete unSuccessfully"; 
    }
?>