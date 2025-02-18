<?php

        include("connection.php");
    


?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Hire Gateway
        </title>
        
        <link rel="stylesheet" type="text/css" href="css/header-footer.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/cards.css">
        <link rel="stylesheet" type="text/css" href="css/font.css">
        <link rel="stylesheet" type="text/css" href="css/after-login.css">

        
    </head>
    <body>
        
        <!-- Header -->

        <div class="header">
            <div class="left">
                <a class="logo-home" href="applicant-after-login.php"><h1 class="site-name">Hire Gateway</h1></a>
            </div>
            <div class="middle">
                <nav class="nav">
                    <ul>
                        <li><a href="applicant-after-login.php">home</a></li>
                        <li><a href="../talent/talentpool.php">talent pool</a></li>
                        <li><a href="../aboutus/aboutus.php">about us</a></li>
                        <li><a href="../contactus/CreateQuestion.php">Contact us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right">
                <button class="sign-out"><a href="applogout.php">Sign Out</a></button>
                <a href="../userprofile/applicant/dashbaord.php"><img class="profile-icon" src="images/user.png"></a>
            </div>
        </div>

        <p class="main-title">Find The Most Excisting Startup Jobs!</p>
            <div class="search-bar">
                <form>
                    <input class="search" type="text" placeholder=" 🔎  Job title or keyword">
                    <button type="search" class="search-button">Search</button>
                </form>
            </div>
        <div class="top">
            <p><u>Top Categories</u></p>
            <div class="categories">
                <a href="jobpages/arts.php">Arts & Creative</a>
                <a href="jobpages/business.php">Business & Finance</a>
                <a href="jobpages/it.php">IT & Technology</a>
                <a href="jobpages/engineering.php">Engineering</a>
                <a href="jobpages/science.php">Science & Research</a>
                <a href="jobpages/healthcare.php">Healthcare</a>
                <a href="jobpages/education.php">Education</a>
                <a href="#">Other Jobs</a>
            </div>
        </div>
        <div class="container">
            <p class="top-ads"><u>Top Advertisements</u></p>
            <div class="box-container">
                

                <?php
                        $query="SELECT jobid,company,jobtitle,salary,deadline,edu_qul,experience,skill,description FROM job";
                        $data=mysqli_query($con,$query);
                        $result=mysqli_num_rows($data);

                        while($row=mysqli_fetch_array($data)){
                            ?>
                        
                            <div class="box">
                                <h3><?php echo $row["company"]?></h3>
                                <p><?php echo $row["jobtitle"]?></p>
                                <p><?php echo $row["description"]?></p>
                                <p><?php echo $row["deadline"]?></p>
                                <button class="btn"><a  href="../applicant/application.php?jobid=<?php echo $row["jobid"];?>">Apply Now</a>
                            </div>
                    
                        <?php
                        }
                ?>
            </div>




        </div>
        
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