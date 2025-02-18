
<?php

    include 'connection.php';
    session_start();

    $rid=$_SESSION['rid'];
   


    

            

    $query = "SELECT * from recruiter where rid=$rid;";









    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);

    $row=mysqli_fetch_array($data)

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/dashbaord.css">
    <link rel="stylesheet" type="text/css" href="../userprofilecss/header-footer.css">
    <link rel="stylesheet" type="text/css" href="../userprofilecss/font.css">
    <link rel="stylesheet" type="text/css" href="./css/after-login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

    <div class="dashboard-containe">
        <div class="dashboard-navigation">
            <ul class="dashboard-list">
                <li class="dashboard-item">
                    <a href="#">
                        
                        
                    </a>
                </li>
                <li class="dashboard-item">
                    <a href="dashbaord.php">
                        <span class="dashboard-icon">
                            <ion-icon name="home-outline" active></ion-icon>
                        </span>
                        <span class="dashboard-title">Dashboard</span>
                    </a>
                </li>


                <li class="dashboard-item">
                    <a id="dashboard-manage" href="editprofile.php">
                        <span class="dashboard-icon">
                            <ion-icon name="create-outline"></ion-icon>
                        </span>
                        <span class="dashboard-title">Edit Profile</span>
                    </a>
                </li>


                <li class="dashboard-item">
                    <a href="postjob.php">
                        <span class="dashboard-icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="dashboard-title">Post Jobs</span>
                    </a>
                </li>

                <li class="dashboard-item">
                    <a id="dashboard-payment" href="adminconatct.php">
                        <span class="dashboard-icon">
                            <ion-icon name="star-half-outline"></ion-icon>
                        </span>
                        <span class="dashboard-title">Admin Contact</span>
                    </a>
                </li>


                <li class="dashboard-item">
                    <a href="../../homepage/relogout.php">
                        <span class="dashboard-icon">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                        </span>
                        <span class="dashboard-title">Log out</span>
                    </a>
                </li>
            </ul>
        </div>


        <!--***********main*************-->
        <div class="dashboard-main">
            <div class="dashboard-topbar">
                <div class="dashboard-toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>

                
            </div>

            <!--********creating cards*******-->
            



            <div class="dashboard-left">
                <h1>Welcome to Hire GateWay<br>Hi   <?php echo $row["firstname"]?></h1>
                <h2 class="dashboard-h2">Personal Information</h2>
                <p><strong>Applicant Id : </strong> <?php echo $row["rid"]?></p>
                <p><strong>First Name : </strong> <?php echo $row["firstname"]?></p>
                <p><strong>Last Name : </strong><?php echo $row["lastname"]?></p>
                <p><strong>Date of Birth : </strong><?php echo $row["dob"]?> </p>
                <p><strong>Email : </strong><?php echo $row["email"]?> </p>
                <p><strong>NIC : </strong><?php echo $row["nic"]?> </p>
                <p><strong>Company Name  : </strong><?php echo $row["company_name"]?> </p>
        

              </div>
                



           

        
        <script src="./js/main.js"></script>

        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.querySelector('.dashboard-toggle');
            const navigation = document.querySelector('.dashboard-navigation');
            const main = document.querySelector('.dashboard-main');

            toggleButton.addEventListener('click', function() {
                navigation.classList.toggle('active');
                main.classList.toggle('active');
                document.querySelector('.dashboard-item h1').classList.toggle('toggled');
            });
        });
    </script>

</body>

</html>
