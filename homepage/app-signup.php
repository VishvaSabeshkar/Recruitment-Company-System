<?php

    include("connection.php");
        

    if(isset($_POST['submit']))
    {
            
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $nic=$_POST['nic'];
            

           





            $query="INSERT INTO  applicant (firstname,Lastname,email,password,Nic)
            VALUES ('$firstname','$lastname','$email','$password','$nic')";

            $data=mysqli_query($con,$query);

            if($data)
            {
                //echo "Data Saved";
                header("Location:../homepage/app-login.php");
            }
            else{
                echo "Error";
            }
    }
?>