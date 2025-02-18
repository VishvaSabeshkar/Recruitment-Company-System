<?php
    include 'connection.php';

    
    session_start();

    $rid=$_SESSION['rid'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/userinfo.css">
    <link rel="stylesheet" type="text/css" href="../userprofilecss/header-footer.css">
    <link rel="stylesheet" type="text/css" href="../userprofilecss/font.css">
    <link rel="stylesheet" type="text/css" href="./css/after-login.css">
    <link rel="stylesheet" type="text/css" href="./css/admin-contact.css">
    
</head>

<body>

    <!-- Header -->

    <div class="header">
        <div class="left">
            <a class="logo-home" href="../../homepage/recruiter-after-login.php"><h1 class="site-name">Hire Gateway</h1></a>
        </div>
        <div class="middle">
            <nav class="nav">
                <ul>
                    <li><a href="../../homepage/recruiter-after-login.php">home</a></li>
                    <li><a href="../../recruiter/application.php">Post job</a></li>
                    <li><a href="../../recruiter/jobstatus.php">Job status</a></li>
                    <li><a href="../../talent/talentpool.php">Talent Pool</a></li>
                    <li><a href="../../contactus/CreateQuestion.php">contact us</a></li>
                    <li><a href="../../aboutus/aboutus.php">about us</a></li>
                </ul>
            </nav>
        </div>
        <div class="right">
                
                <a href="#"><img class="profile-icon" src="../../homepage/images/user.png"></a><br>
        </div>
    </div>


    <div class="containe">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        
                        
                    </a>
                </li>

                <li>
                    <a href="dashbaord.php">
                        <span class="icon">
                            <ion-icon name="home-outline" active></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a id="manage" href="editprofile.php">
                        <span class="icon">
                            <ion-icon name="create-outline"></ion-icon>
                        </span>
                        <span class="title">Edit Profile</span>
                    </a>
                </li>


                <li>
                    <a href="postjob.php">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">Post Jobs</span>
                    </a>
                </li>

                <li>
                    <a id="payment" href="adminconatct.php">
                        <span class="icon">
                            <ion-icon name="star-half-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Contact</span>
                    </a>
                </li>


                
                <li>
                    <a
                        href="../../homepage/relogout.php">
                        <span class="icon">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu"></ion-icon>
            </div>

            <div class=contact-admin>
                <div class="admin-container">
                    <h2>Contact Admin</h2>
                    <h3 class="admin-email">Email : <span class="email">pinidusubasinghe@gmail.com</span></h3>
                    <h3 class="admin-phone">WhatsApp : 1234567890</h3>
                </div>
            </div>

        </div>

        
        
            

  
  
  
  
                  
              
            
  
          
        
  
        
    </div>

   




    <script src="./js/myAds.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--import from google to add icons-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  
</body>

</html>