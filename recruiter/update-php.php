<?php

    include 'connection.php';

    session_start();

    $jobid = $_SESSION['jobid'];
    

    if(isset($_POST['update_btn']))
    {
        $company=$_POST['company'];
        $jobtitle = $_POST['jobtitle'];
        $salary = $_POST['salary'];
        $deadline = $_POST['deadline'];
        $education_qual = $_POST['education_qual'];
        $experience = $_POST['experience'];
        $skill = $_POST['skill'];
        $description = $_POST['description'];





        $company = mysqli_real_escape_string($con, $company);
        $jobtitle = mysqli_real_escape_string($con, $jobtitle);
        $salary = mysqli_real_escape_string($con, $salary);
        $deadline = mysqli_real_escape_string($con, $deadline);
        $education_qual = mysqli_real_escape_string($con, $education_qual);
        $experience = mysqli_real_escape_string($con, $experience);
        $skill = mysqli_real_escape_string($con, $skill);
        $description = mysqli_real_escape_string($con, $description);
        


            $update = "UPDATE job 
                SET company='$company',
               jobtitle='$jobtitle',
               salary='$salary',
               deadline='$deadline',
               experience='$experience',
               skill='$skill',
               description='$description',
               edu_qul='$education_qual'
               WHERE jobid='$jobid'";


            $data = mysqli_query($con, $update);

        if($data)
        {
            header("Location:../userprofile/recruiter/postjob.php");
        }
        else{
            //echo "Error";
        }
    }
?>
