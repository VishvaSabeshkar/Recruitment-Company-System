<?php

    include("connection.php");
        

    if(isset($_POST['submit']))
    {
            
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $nic=$_POST['nic'];
            

           





            $query="INSERT INTO  recruiter (firstname,lastname,email,password,nic)
            VALUES ('$firstname','$lastname','$email','$password','$nic')";

            $data=mysqli_query($con,$query);

            if($data)
            {
                //echo "Data Saved";
                header("Location:../homepage/re-login.php");
            }
            else{
                echo "Error";
            }
    }
?>