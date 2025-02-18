<?php
    include 'connection.php';

    $interview_id=$_GET['interview_id'];

    $query="DELETE FROM interview WHERE interview_id=' $interview_id'";
    $data=mysqli_query($con,$query);

    if($data)
    {
        
        header("Location:scheduled-interviews.php");
    }
    else
    {
        echo "Delete unSuccessfully"; 
    }
?>