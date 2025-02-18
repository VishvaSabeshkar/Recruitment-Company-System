<?php

  include 'connection.php';

  session_start();
  

  $application_id=$_GET['application_id'];

  $query = "SELECT A.*, App.email
  FROM application A
  JOIN applicant App ON A.applicant_id = App.applicant_id
  WHERE A.application_id = $application_id;";
  
  $data=mysqli_query($con,$query);
  $result=mysqli_num_rows($data);
  $row=mysqli_fetch_array($data)

  

  




?>





<!DOCTYPE html>
   
     
  <head>

    <title>Responsive Resume website html css</title>
    
    <link rel="stylesheet" href="css/jobstatus.css">
  </head>

  <body>    
    <div class="container">
      <div class="header">
        <h1><?php echo $row["firstname"]?>  <?php echo $row["lastname"]?></h1>
        <h3><?php echo $row["job_title"]?></h3>
      </div>
      

      <div class="main">
        <div class="left">
          <h2>Personal Information</h2>
          <p><strong>Name : </strong> <?php echo $row["firstname"]?>  <?php echo $row["lastname"]?></p>
          <p><strong>Date of birth : </strong> <?dobphp echo $row[""]?></p>
          <p><strong>Email : </strong><?php echo $row["email"]?></p>
          <p><strong>Phone : </strong><?php echo $row["phone_num"]?> </p>
          <p><strong>Address : </strong><?php echo $row["address"]?> </p>
          <p><strong>Linkedin Profile  : </strong><?php echo $row["linkedin"]?> </p>
          <h2>Skills</h2>
          <ul>
            <li><?php echo $row["skill_achievement"]?> </li>
            <li><?php echo $row["tech_skill_cat"]?> </li>
            <li><?php echo $row["domain_skill_cat"]?> </li>
          </ul>
          <h2>Education</h2>
          <h3><?php echo $row["edu_level"]?> <?php echo $row["field_of_study"]?> (<?php echo $row["degree_obt"]?>) </h3>
          <p>Degree Start : <?php echo $row["degree_start_year"]?> </p>
          <p>Degree End : <?php echo $row["degree_end_year"]?> </p>
          <p>Institute Name : <?php echo $row["inst_name"]?> </p>
          
        </div>
        
        <div class="right">
          <h2>Work Experience</h2>
          <h3><?php echo $row["company_name"]?></h3>
          <p><strong>Position:</strong> <?php echo $row["job_title"]?></p>
          <p><strong>Duration:</strong> 2018-2022</p>
          <ul>
            <li><?php echo $row["skill_achievement"]?></li>
            <li><?php echo $row["domain_skill_cat"]?> </li>
            <li>Collaborated with cross-functional teams to deliver high-quality software products</li>
          
        </div>
      </div>
    </div> 


    </body>
</html>
