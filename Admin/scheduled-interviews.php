<?php
    include 'connection.php';

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Scheduled interviews
        </title>
        
        <link rel="stylesheet" type="text/css" href="admincss/header-footer.css">
        <link rel="stylesheet" type="text/css" href="admincss/font.css">
        <link rel="stylesheet" type="text/css" href="admincss/adminHome.css">
        <link rel="stylesheet" type="text/css" href="admincss/interview.css">
        <link rel="stylesheet" type="text/css" href="admincss/schedule-interview.css">
        <link rel="stylesheet" type="text/css" href="../homepage/css/after-login.css">

    </head>
    <body>
        
        <!-- Header -->

        <div class="header">
            <div class="left">
                <h1 class="site-name">Hire Gateway</h1>
            </div>
            <div class="middle">
                <nav class="nav">
                    <ul>
                        <li><a href="adminHome.php">User Info</a></li>
                        <li><a href="job-info.php">job Info</a></li>
                        <li><a href="interview.php">Interview</a></li>
                        <li><a href="scheduled-interviews.php">Scheduled Interviews</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right">
                <button class="sign-out"><a href="applogout.php">Sign Out</a></button>
                <a href=""><img class="profile-icon" src="../homepage/images/user.png"></a>
            </div>
        </div>

       <table class="interview-schedule" border="1">
            <caption>Scheduled Interviews</caption>
            <tr>
                <th>Interview ID</th>
                <th>Place</th>
                <th>Date</th>
                <th>Time</th>
                <th>Panel</th>
                <th>Applicant Id</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
            <?php



        

                $query = "SELECT 
                I.interview_id, 
                I.interview_panel,
                I.place, 
                I.interview_date, 
                I.interview_time,
                A.applicant_id,
                A.firstname,
                A.lastname,
                A.email
                FROM 
                Interview I
                JOIN 
                Applicant A ON I.interview_id = A.interview_id;";









                $data=mysqli_query($con,$query);
                $result=mysqli_num_rows($data);

                while($row=mysqli_fetch_array($data)){

                    ?>
                    
                    <tr>
                        <td><?php echo $row["interview_id"]?></td>
                        <td><?php echo $row["place"]?></td>
                        <td><?php echo $row["interview_date"]?></td>
                        <td><?php echo $row["interview_time"]?></td>
                        <td><?php echo $row["interview_panel"]?></td>
                        <td><?php echo $row["applicant_id"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><button class="update-btn"><a href="updateform.php?interview_id=<?php echo $row["interview_id"];?>">Update</a></td>
                        <td><button class="delete-btn"><a href="interviewdelete.php?interview_id=<?php echo $row["interview_id"];?>">Delete</a></td>
                    </tr>

                <?php
                }
                ?>

        </table>
            
        <br>

        <!--Footer-->

        <div class="footer">
            <div class="col-1">
                <h3>USEFUL LINKS</h3>
                <div class="links">
                    <a href="#">About</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy & Cookies</a>
                    <a href="#">FAQ</a>
                    <a href="#">Contact Us</a>
                </div>         
            </div>
            <div class="col-2">
                <h3>Get Updates</h3>
                <form id="get-updates" method="post" action="">
                    <input type="email" placeholder="example@gmail.com" id="updates-email" name="Updates-Email">
                    <button type="submit" class="submit-button" id="submit-btn">Submit</button>
                </form>
            </div>
            <div class="col-3">
                <h3>Contact</h3>
                <div class="social-media">
                    <a href="https://www.whatsapp.com/">Whatsapp</a>
                    <a href="https://www.facebook.com/">Facebook</a>
                    <a href="https://www.instagram.com/">Instagram</a>
                    <a href="https://www.linkedin.com/">LinkedIn</a>
                    <a href="https://twitter.com/">Twitter</a>
                </div>   
            </div>
        </div>
    </body>
</html>