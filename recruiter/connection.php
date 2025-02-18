<?php

    $host='localhost';
    $user='root';
    $password='';
    $db='recruitment_company';

    $con=mysqli_connect($host,$user,$password,$db);

    if($con)
    {
       // echo"Connection Ok";
    }
    else
    {
        echo"Connection Error";
    }


?>