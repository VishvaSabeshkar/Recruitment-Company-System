<?php

include("connection.php");
session_start();

$applicant_id = $_SESSION['applicant_id'];
$jobid = $_SESSION['jobid'];

if(isset($_POST['save_btn'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $nic = $_POST['nic'];
    $phone_num = $_POST['phone'];
    $dob = $_POST['dateofbirth'];
    $linkedin = $_POST['linkedinrpofile'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $education_level = $_POST['educationlevel'];
    $inst_name = $_POST['institutionname'];
    $degree_obt = $_POST['DegreeObtained'];
    $Majorfield = $_POST['major'];
    $degree_start = $_POST['degreestartyear'];
    $degree_end = $_POST['degreeendyear'];
    $skill_cat = $_POST['skill_cat'];
    $job_title = $_POST['jobtitle'];
    $comp_name = $_POST['companyname'];
    $rele_skil_ach = $_POST['Achievements'];
    $tech_skill_cat = $_POST['technical-skill-category'];
    $domain_spe_skill_cat = $_POST['domain-specific-skill-category'];

    $query_application = "INSERT INTO application (
        firstname, lastname, dob, nic, phone_num, skill_achievement, skill_cat, 
        tech_skill_cat, company_name, job_title, domain_skill_cat, degree_start_year, 
        degree_end_year, edu_level, field_of_study, degree_obt, inst_name, address, 
        linkedin, applicant_id, job_id, city
    )
    VALUES (
        '$firstname', '$lastname', '$dob', '$nic', '$phone_num', '$rele_skil_ach', 
        '$skill_cat', '$tech_skill_cat', '$comp_name', '$job_title', 
        '$domain_spe_skill_cat', '$degree_start', '$degree_end', '$education_level', 
        '$Majorfield', '$degree_obt', '$inst_name', '$address', '$linkedin', 
        '$applicant_id', '$jobid', '$city'
    )";
    
    $result_application = mysqli_query($con, $query_application);
    
    if ($result_application) {
        header("Location:../homepage/applicant-after-login.php");
        exit(); 
    } else {
        echo "Error: " . mysqli_error($con); 
    }
}
?>
