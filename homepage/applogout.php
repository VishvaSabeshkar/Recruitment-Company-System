<?php
    session_start(); 

   
    if (isset($_SESSION['email'])) {
       
        $applicant_id = $_SESSION['applicant_id']; 

       
        session_destroy();
        
        
        header("Location: ../index.php?applicant_id=$applicant_id");
        exit();
    } else {
       
        header("Location:../index.php");
        exit();
    }
?>