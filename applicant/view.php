<?php
    include 'connection.php';
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Hire Gateway
        </title>

        
        <link rel="stylesheet" type="text/css" href="css/view.css">

        <script>
            function confirmDelete() {
                return confirm("Are you sure you want to delete this application?");
            }
        </script>
        
    </head>
    <body>

        

        <div class="header">
            

          <table class="job-info" border="1">
            <caption>
                Application Information
            </caption>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Nic</th>
                <th>Email</th>
                <th>Applied Job</th>
                <th>Offered Company</th>
                <th colspan="2">Action</th>
            </tr>




            <?php

                session_start();
                $applicant_id=$_SESSION['applicant_id'];

                $query="SELECT 
                a.application_id,
                a.firstname,
                a.lastname,
                a.nic,
                app.email,
                j.jobtitle,
                j.company
                FROM 
                application AS a
                JOIN 
                applicant AS app ON a.applicant_id = app.applicant_id
                JOIN 
                job AS j ON a.job_id = j.job_id
                WHERE 
                app.applicant_id = $applicant_id;";

                $data=mysqli_query($con,$query);
                $result=mysqli_num_rows($data);

                while($row=mysqli_fetch_array($data)){
                    ?>
                    
                    <tr>
                        <td><?php echo $row["firstname"]?></td>
                        <td><?php echo $row["lastname"]?></td>
                        <td><?php echo $row["nic"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["jobtitle"]?></td>
                        <td><?php echo $row["company"]?></td>
                        <td><button class="update-btn"><a href="update.php?application_id=<?php echo $row["application_id"];?>">Update</a></td>
                        <td>

                            <button class="delete-btn" onclick="return confirmDelete();">
                                <a href="delete.php?application_id=<?php echo $row["application_id"];?>">Delete</a>
                            </button>

                        </td>

                    </tr>
                
                <?php
                }
                ?>




                
            
          

        
        </div>
  
    </body>
</html>