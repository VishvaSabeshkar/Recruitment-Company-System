
<?php

    include 'connection.php';
    session_start();

    
   


    $applicant_id=$_GET['applicant_id'];
    $_SESSION['applicant_id'] = $_GET['applicant_id'];

            

    $query = "SELECT 
    A.applicant_id, 
    A.firstname, 
    A.lastname,
    A.city, 
    A.email, 
    J.jobid AS job_id, 
    J.jobtitle,
    R.rid, 
    R.company_name
    FROM 
    Applicant A
    JOIN 
    Application AP ON A.applicant_id = AP.applicant_id
    JOIN 
    Job J ON AP.job_id = J.jobid
    JOIN 
    Recruiter R ON J.recruiter_id = R.rid
    WHERE 
    A.applicant_id = $applicant_id;";









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
        <link rel="stylesheet" type="text/css" href="../homepage/css/after-login.css">

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
                    </ul>
                </nav>
            </div>
            <div class="right">
                <button class="sign-out"><a href="applogout.php">Sign Out</a></button>
                <a href="../index.php"><img class="profile-icon" src="../homepage/images/user.png"></a>
            </div>
        </div>

        <a class="back-to-interview" href="interview.php">Back to Interview Page</a>
        
        <br>

        <div class="interview-container">
            <div class="interview-form-content">
                <div class="left-side">
                    <div class="applicant-info">
                        <h2>Applicant Info</h2>
                        <br>
                        <div class="user-name">
                            <img src="interview-images/user-solid.svg" class="user-logo">
                            <p class="user-name"><?php echo $row["firstname"]?> <?php echo $row["lastname"]?></p>
                        </div>
                        <div class="email">
                            <img src="interview-images/envelope-solid.svg" class="email-logo">
                            <p class="user-email"><?php echo $row["email"]?></p>
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
                    <div class="interview-user">Interview <span class="username"><?php echo $row["firstname"]?> <?php echo $row["lastname"]?></span></div>
                    <p class="company-name">Job Offered By - <span class="company"><?php echo $row["company_name"]?></span></p>
                    <p class="set-interview">Set Interview Details</p>
                    <div class="set-interview-details">
                    <form action="interview-form-php.php" method="post" class="set-details" id="interview-form">
                        <div class="row-1">
                            <label for="date">Date</label><br>
                            <input type="date" id="date" name="date" required>
                            <span id="date-error" class="error-message"></span> 
                            <label for="time">Time</label><br>
                            <input type="time" id="time" name="time" required>
                            <span id="time-error" class="error-message"></span> 
                        </div><br>
                        <div class="row-2">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" required>
                            <span id="location-error" class="error-message"></span> 
                        </div><br>
                        <div class="row-3">
                            <label for="req-docs">Interview Panel</label><br>
                            <textarea id="req-docs" name="req-docs" class="docs" placeholder="Please bring these documents" rows="8" cols="50"></textarea>
                        </div>

                        <div class="interview-schedule-now">
                            <button type="submit" class="schedule-btn" id="schedule-button" name="schedule-button">Schedule Now</button>
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


        <script>
            const form = document.getElementById('interview-form');
            const dateInput = document.getElementById('date');
            const timeInput = document.getElementById('time');
            const locationInput = document.getElementById('location');

            const dateError = document.getElementById('date-error');
            const timeError = document.getElementById('time-error');
            const locationError = document.getElementById('location-error');

            dateInput.addEventListener('input', function() {
                if (!isValidDate(this.value)) {
                    dateError.textContent = 'Please enter a valid date.';
                } else {
                    dateError.textContent = '';
                }
            });

            timeInput.addEventListener('input', function() {
                if (!isValidTime(this.value)) {
                    timeError.textContent = 'Please enter a valid time.';
                } else {
                    timeError.textContent = '';
                }
            });

            locationInput.addEventListener('input', function() {
                if (!isValidLocation(this.value)) {
                    locationError.textContent = 'Location cannot be empty.';
                } else {
                    locationError.textContent = '';
                }
            });

            function isValidDate(dateString) {
                // Check if the date string is a valid date
                const dateRegex = /^\d{4}-\d{2}-\d{2}$/;
                return dateRegex.test(dateString);
            }

            function isValidTime(timeString) {
                // Check if the time string is a valid time
                const timeRegex = /^(?:[01]\d|2[0-3]):(?:[0-5]\d)$/;
                return timeRegex.test(timeString);
            }

            function isValidLocation(location) {
                // Check if the location is not empty
                return location.trim() !== '';
            }
        </script>






    </body>
</html>