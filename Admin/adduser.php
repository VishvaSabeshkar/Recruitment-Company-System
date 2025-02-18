<?php


    
    include 'connection.php';
    

    //session_start();


    //$applicant_id = $_SESSION['applicant_id'];
    //$job_id=$_SESSION['job_id'];

    

                


    
    

        

    if(isset($_POST['submit']))
    {
                
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST["email"];
            $password=$_POST['pw2']; 
            $nic=$_POST['nic'];
            $phone_num=$_POST['mobile'];
            $gender=$_POST['gender']; 
        
            $query_application = "INSERT INTO applicant (firstname, lastname, email, password, nic, phone_num)
            VALUES ('$firstname', '$lastname', '$email', '$password', '$nic', '$phone_num')";
            $result_application = mysqli_query($con, $query_application);
        
            
        
            if ($result_application) {

                
                header("Location:adminHome.php");
            } else {
                echo "Error". mysqli_error($con);
            }


            
    }
?>