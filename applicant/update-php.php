<?php

    include 'connection.php';

    session_start();

    $application_id = $_SESSION['application_id'];
    

    if(isset($_POST['update_btn']))
    {
       
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $nic=$_POST['nic'];
            $phone_num=$_POST['phone'];
            $dob=$_POST['dateofbirth'];
            $city=$_POST['city'];
            $linkedin=$_POST['linkedinrpofile'];
            $address=$_POST['address'];
            $education_level=$_POST['educationlevel'];
            $inst_name=$_POST['institutionname'];
            $degree_obt=$_POST['DegreeObtained'];
            $Majorfield=$_POST['major'];
            $degree_start=$_POST['degreestartyear'];
            $degree_end=$_POST['degreeendyear'];
            $skill_cat=$_POST['skill_cat'];
            $job_title=$_POST['jobtitle'];
            $comp_name=$_POST['companyname'];
            $rele_skil_ach=$_POST['Achievements'];
            $tech_skill_cat=$_POST['technical-skill-category'];
            $domain_spe_skill_cat=$_POST['domain-specific-skill-category'];
            
        

        $update="UPDATE  application SET firstname='$firstname', lastname='$lastname', dob='$dob', nic='$nic', phone_num='$phone_num',skill_achievement='$rele_skil_ach',skill_cat='$skill_cat', tech_skill_cat='$tech_skill_cat', company_name='$comp_name', job_title='$job_title', domain_skill_cat='$domain_spe_skill_cat', degree_start_year='$degree_start', degree_end_year='$degree_end', edu_level='$education_level', field_of_study='$Majorfield', degree_obt='$degree_obt', inst_name='$inst_name', address='$address', linkedin='$linkedin',city='$city' WHERE application_id='$application_id'";
        $data=mysqli_query($con,$update);

        if($data)
        {
            header("Location:../userprofile/applicant/appliedjob.php");
            
        }
        else{
            //echo "Error";
        }
    }
?>
