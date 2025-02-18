<?php

    include("connection.php");



    if(isset($_POST['submit']))
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query="SELECT * FROM recruiter where email='$email' and password='$password'";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);

        $query_recruiter = "SELECT * FROM recruiter WHERE email='$email'";
        $result_recruiter = mysqli_query($con, $query_recruiter);
    
        while($record = mysqli_fetch_assoc($result_recruiter)) {

            if($record["email"]==$email &&  $record["password"]==$password) {
                session_start();

                $_SESSION['rid'] = $record['rid'];
                $_SESSION['email'] = $email;

                header("Location:recruiter-after-login.php");

                

                exit(); 
            }
        }
    
       
        $query_admin = "SELECT * FROM admin WHERE username='$email'";
        $result_admin = mysqli_query($con, $query_admin);
    
        while($record = mysqli_fetch_assoc($result_admin)) {
            if($record["username"]==$email &&  $record["password"]==$password) {

                //session_start();
                //$_SESSION['email'] = $email;

                header("Location: ../Admin/adminHome.php");

                exit(); 
            }
        }
    
        
        echo "Login Failed. Please check your email and password.";
    }
    ?>

    
       



        

    
