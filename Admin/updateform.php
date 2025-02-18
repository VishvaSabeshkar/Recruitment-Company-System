
<?php

    include 'connection.php';
    session_start();

    
   


    $interview_id=$_GET['interview_id'];
    $_SESSION['interview_id'] = $_GET['interview_id'];

            

    $query = "SELECT 
    A.firstname AS applicant_name,
    A.email AS applicant_email,
    A.lastname,
    A.city,
    J.jobtitle,
    J.company,
    I.*
    FROM 
    Interview I
    JOIN 
    Applicant A ON I.interview_id = A.interview_id
    JOIN 
    Job J ON A.job_name = J.jobtitle
    WHERE 
    I.interview_id = $interview_id;
";









    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);

    $row=mysqli_fetch_array($data)

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Schedule Interview
        </title>
        
        <link rel="stylesheet" type="text/css" href="admincss/header-footer.css">
        <link rel="stylesheet" type="text/css" href="admincss/font.css">
        <link rel="stylesheet" type="text/css" href="admincss/adminHome.css">
        <link rel="stylesheet" type="text/css" href="admincss/interview-form.css">

        <style>
            body {
                margin-top: 100px;
            }
        </style>

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
                        <li><a href="feedback.php">feedback</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right">
                <button class="sign-in"><a href="#">Sign in</a></button>
                <button class="sign-up"><a href="#">Sign up</a></button>
            </div>
        </div>

        <a class="back-to-interview" href="interview.html">Back to Interview Page</a>
        
        <br>

        <div class="interview-container">
            <div class="interview-form-content">
                <div class="left-side">
                    <div class="applicant-info">
                        <h2>Applicant Info</h2>
                        <br>
                        <div class="user-name">
                            <img src="interview-images/user-solid.svg" class="user-logo">
                            <p class="user-name"><?php echo $row["applicant_name"]?> <?php echo $row["lastname"]?></p>
                        </div>
                        <div class="email">
                            <img src="interview-images/envelope-solid.svg" class="email-logo">
                            <p class="user-email"><?php echo $row["applicant_email"]?></p>
                        </div>
                        <div class="city">
                            <img src="interview-images/location-dot-solid.svg" class="location-logo">
                            <p class="user-city"><?php echo $row["city"]?></p>
                        </div>
                        <div class="job">
                            <img src="interview-images/bag-shopping-solid.svg" class="job-logo">
                            <p class="applied-job"><?php echo $row["jobtitle"]?></p>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="interview-user">Interview <span class="username"><?php echo $row["applicant_name"]?> <?php echo $row["lastname"]?></span></div>
                    <p class="company-name">Job Offered By - <span class="company"><?php echo $row["company"]?></span></p>
                    <p class="set-interview">Set Interview Details</p>
                    <div class="set-interview-details">
                        <form action="update-php.php" method="post" class="set-details">
                            <div class="row-1">
                                <label for="set-date">Date</label>
                                <br>
                                <input type="date" id="date" name="date" value="<?php echo $row["interview_date"]?>">
                                <label for="set-time">Time</label>
                                <br>
                                <input type="time" id="time" name="time" value="<?php echo $row["interview_time"]?>">
                            </div>
                            <br>
                            <div class="row-2">
                                <label for="set-location">Location</label>
                                <input type="text" id="location" name="Location" value="<?php echo $row["place"]?>">
                            </div>
                            <br>
                            <div class="row-3">
                                <label for="set-docs">Required Documents</label>
                                <br>
                                <textarea id="documents" name="req-docs" class="docs" rows="8" cols="50"> <?php echo $row["interview_panel"]?></textarea>

                            </div>

                            <div class="interview-schedule-now">
                                <button type="submit" class="schedule-btn" id="schedule-button" name="schedule-button">Update Now</button>
                            </div>

                        </form>
                    </div>
                    <br>
                    
                </div>
            </div>
        </div>
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