<?php

    include("connection.php");
   



    if(isset($_POST['submit']))
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query="SELECT * FROM applicant where email='$email' and password='$password'";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);

        while($record=mysqli_fetch_assoc($result)){

            if($record["email"]==$email &&  $record["password"]==$password)
            {
                session_start();

                $select="SELECT  applicant_id FROM applicant WHERE email='$email'";
                $data=mysqli_query($con,$select);
                $row=mysqli_fetch_array($data);

                $_SESSION['applicant_id'] = $row['applicant_id'];

                $_SESSION['email'] = $email;

                header("Location:applicant-after-login.php");



                
            }
            else{
                echo"Login Failed please cheak your UserName and Password";
            }
        }

    }
       



        

    
?>