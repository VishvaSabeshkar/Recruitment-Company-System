<?php
    include 'connection.php';

    session_start();
    $applicant_id=$_SESSION['applicant_id'];
    

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
    <link rel="stylesheet" type="text/css" href="../../homepage/css/after-login.css">
</head>

<body>

    <!-- Header -->

    <div class="header">
        <div class="left">
            <a class="logo-home" href="../../homepage/applicant-after-login.php"><h1 class="site-name">Hire Gateway</h1></a>
        </div>
        <div class="middle">
            <nav class="nav">
                <ul>
                    <li><a href="../../homepage/applicant-after-login.php">home</a></li>
                    <li><a href="../../talent/talentpool.php">talent pool</a></li>
                    <li><a href="../../contactus/CreateQuestion.php">Contact Us</a></li>
                    <li><a href="../../aboutus/aboutus.php">about us</a></li>
                </ul>
            </nav>
        </div>
        <div class="right">
            
                <a href="#"><img class="profile-icon" src="../../homepage/images/user.png"></a>
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
                        <span class="title">Edit profile</span>
                    </a>
                </li>


                <li>
                    <a href="appliedjob.php">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">Applied Jobs</span>
                    </a>
                </li>

                <li>
                    <a id="payment" href="talentpool.php">
                        <span class="icon">
                            <ion-icon name="star-half-outline"></ion-icon>
                        </span>
                        <span class="title">Talnet Pool</span>
                    </a>
                </li>

                <li>
                    <a id="payment" href="interview.php">
                        <span class="icon">
                            <ion-icon name="star-half-outline"></ion-icon>
                        </span>
                        <span class="title">Interview Shedule</span>
                    </a>
                </li>


                
                <li>
                    <a
                        href="../../homepage/applogout.php">
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

        </div>

        <div class="header-table">
            

            <table class="job-info" border="1">
              <caption>
                  Applied Job Information
              </caption>
              <tr>
                <th>Email</th>
                <th>Nic</th>
                <th>Job</th>
                <th>Date</th>
                <th>Time</th>
                <th>Place</th>
                

              </tr>
  
  
  
  
              <?php
                    $query = "SELECT
                    Interview.interview_date,
                    Interview.interview_time,
                    Interview.place,
                    Applicant.nic,
                    Applicant.email,
                    Job.jobtitle
                FROM
                    Interview
                JOIN
                    Applicant ON Interview.interview_id = Applicant.interview_id
                JOIN
                    Application ON Applicant.applicant_id = Application.applicant_id
                JOIN
                    Job ON Application.job_id = Job.jobid
                WHERE
                    Applicant.applicant_id = $applicant_id;
                ";

                    $data = mysqli_query($con, $query);

                    // Check if the query was successful
                    if ($data) {
                        while ($row = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["nic"] ?></td>
                                <td><?php echo $row["jobtitle"] ?></td>
                                <td><?php echo $row["interview_date"] ?></td>
                                <td><?php echo $row["interview_time"] ?></td>
                                <td><?php echo $row["place"] ?></td>
                                
                            </tr>
                            <?php
                        }
                    } else {
                        // Handle query execution error
                        echo "Error: " . mysqli_error($con);
                    }
                ?>

  
  
  
  
                  
              
            
  
          
        </div>
  
        
    </div>

   




    <script src="./js/myAds.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--import from google to add icons-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <script>
        function confirmUpdate(applicationId) {
            if (confirm("Are you sure you want to update this application?")) {
                window.location.href = "../../talent/php/update_applicant.php?talentPoolID=" +talentPoolID;
            }
        }

        function confirmDelete(applicationId) {
            if (confirm("Are you sure you want to delete this application?")) {
                window.location.href = "../../applicant/delete.php?application_id=" + applicationId;
            }
        }
    </script>


</body>

</html>