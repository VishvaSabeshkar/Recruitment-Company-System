<?php
    include 'connection.php';

    $application_id=$_GET['application_id'];

    $query="DELETE FROM application WHERE application_id='$application_id'";
    $data=mysqli_query($con,$query);

    if($data)
    {
        header("Location:../userprofile/applicant/appliedjob.php");
    }
    else
    {
        echo "Delete unSuccessfully"; 
    }
?>