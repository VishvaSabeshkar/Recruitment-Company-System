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
                <th>TalentPool Id</th>
                <th>Full Name</th>
                <th>Date of Birth</th>
                <th>City</th>
                <th>Post Date/Time</th>
                <th colspan="2">Action</th>

              </tr>
  
  
  
  
              <?php
  
                  
  
                  $query="SELECT * from talentpool;";

  
                  $data=mysqli_query($con,$query);
                  $result=mysqli_num_rows($data);
  
                  while($row=mysqli_fetch_array($data)){
                      ?>
                      
                      <tr>
                        <td><?php echo $row["talentPoolID"]?></td>
                        <td><?php echo $row["fullName"]?></td>
                        <td><?php echo $row["dob"]?></td>
                        <td><?php echo $row["city"]?></td>
                        <td><?php echo $row["submissionDate"]?></td>

                       
                        <td><button class="update-btn" onclick="confirmUpdate(<?php echo $row['talentPoolID']; ?>)">Update</button></td>
                        <td><button class="delete-btn" onclick="confirmDelete(<?php echo $row['talentPoolID']; ?>)">Delete</button></td>
  
                      </tr>
                  
                  <?php
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
        function confirmUpdate(talentPoolID) {
            if (confirm("Are you sure you want to update this application?")) {
                window.location.href = "../../talent/php/update_applicant.php?talentPoolID=" +talentPoolID;
            }
        }
        
        function confirmDelete(talentPoolID) {
            if (confirm("Are you sure you want to delete this application?")) {
                window.location.href = "../../talent/php/delete.php?talentPoolID=" +talentPoolID;
            }
        }
    </script>


</body>

</html>