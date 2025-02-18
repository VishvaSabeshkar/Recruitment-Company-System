<?php
    include 'connection.php';

    $jobid=$_GET['jobid'];

    $query="DELETE FROM job WHERE jobid='$jobid'";
    $data=mysqli_query($con,$query);

    if($data)
    {
        header("Location:../userprofile/recruiter/postjob.php");
    }
    else
    {
        echo "Delete unSuccessfully"; 
    }
?>