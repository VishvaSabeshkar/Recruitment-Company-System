<?php
session_start(); 

    include("connection.php");

    $rid = $_SESSION['rid'];
   

    

        

    if(isset($_POST['save_btn']))
    {
            
            
        $company=$_POST['company'];
        $jobtitle=$_POST['jobtitle'];
        $salary=$_POST['salary'];
        $deadline=$_POST['deadline'];
        $education_qual =$_POST['education_qual'];
        $experience =$_POST['experience'];
        $skill =$_POST['skill'];
        $description =$_POST['description'];
        
           





            $query="INSERT INTO job (company,jobtitle,salary,deadline,edu_qul,experience,skill,description,recruiter_id)
            VALUES ('$company','$jobtitle','$salary','$deadline','$education_qual','$experience','$skill','$description','$rid')";

            $data=mysqli_query($con,$query);

            if($data)
            {
                
                header("Location:../homepage/recruiter-after-login.php");

            }
            else{
                echo "Error";
            }
    }
?>