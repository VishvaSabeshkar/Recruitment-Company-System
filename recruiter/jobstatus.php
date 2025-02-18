<?php
    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Hire Gateway
        </title>

        
        <link rel="stylesheet" href="css/view.css">
    </head>
    <body>

        

        <div class="header">
            

          <table class="job-info" border="1">
            <caption>
                Job Status
            </caption>
            <tr>
                <th>Job Title</th>
                <th>Applicant Name</th>
                <th>Email</th>
                <th>Nic</th>
                <th>country</th>
                <th colspan="1">Action</th>
            </tr>

            <?php


                session_start();

                $rid=$_SESSION['rid'];

            

                $query = "SELECT A.application_id, A.job_id,j.jobtitle ,App.nic, App.email,app.county,app.firstname,app.lastname
                FROM Application A
                JOIN Job j ON A.job_id = j.jobid
                JOIN Applicant App ON A.applicant_id = App.applicant_id
                WHERE j.recruiter_id = $rid;";

                
                

            
                



                $data=mysqli_query($con,$query);
                $result=mysqli_num_rows($data);

                while($row=mysqli_fetch_array($data)){

                    ?>
                    
                    <tr>
                        <td><?php echo $row["jobtitle"]?></td>
                        <td><?php echo $row["firstname"]?>  <?php echo $row["lastname"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["nic"]?></td>
                        <td><?php echo $row["county"]?></td>
                        <td><button class="update-btn"><a href="jobstatusview.php?application_id=<?php echo $row["application_id"];?>">View</a></td>

                    </tr>
                
                <?php
                }
                ?>




                
            
          

        
        </div>
  
    </body>
</html>