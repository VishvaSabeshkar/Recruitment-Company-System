
<?php

    include 'connection.php';
   
    session_start();
    $applicant_id=$_SESSION['applicant_id'];
            

    $query = "SELECT * from applicant where applicant_id=$applicant_id;";









    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);

    $row=mysqli_fetch_array($data)

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/editprofile.css">
    <link rel="stylesheet" type="text/css" href="../userprofilecss/header-footer.css">
    <link rel="stylesheet" type="text/css" href="../userprofilecss/font.css">
    <link rel="stylesheet" type="text/css" href="../../homepage/css/after-login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>


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
                    <a href="editprofile.php">
                        <span class="icon">
                            <ion-icon name="create-outline"></ion-icon>
                        </span>
                        <span class="title">Edit Profile</span>
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
                    <a href="talentpool.php">
                        <span class="icon">
                            <ion-icon name="star-half-outline"></ion-icon>
                        </span>
                        <span class="title">Talent Pool</span>
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
                    <a href="../../homepage/applogout.php">
                        <span class="icon">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Log out</span>
                    </a>
                </li>
            </ul>
        </div>



        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>

                <!--********creating form*******-->
                
                    

                <div class="container">
                    <form id="admin-add-user-form"  action="edit-php.php" method="POST">
                        <h2>Update User Information</h2>
                        <div class="content">
                            <div class="input-box">
                                <lable for="first-name">First Name</lable>
                                <br>
                                <input type="text" value="<?php echo $row["firstname"]?>" id="firstname" name="firstname" >
                                
                            </div>
                            <div class="input-box">
                                <lable for="last-name">Last Name</lable>
                                <br>
                                <input type="text" value="<?php echo $row["Lastname"]?>"  id="lastname" name="lastname">
                                
                            </div>
                            <div class="input-box">
                                <lable for="email">Email</lable>
                                <br>
                                <input type="email" value="<?php echo $row["email"]?>"  id="email" name="email">
                                
                            </div>
                            <div class="input-box">
                                <lable for="contact-number">Contact Number</lable>
                                <br>
                                <input type="tel" value="<?php echo $row["phone_num"]?>"  id="mobile" name="mobile" >
                                
                            </div>
                            <div class="input-box">
                                <lable for="nic">NIC</lable>
                                <br>
                                <input type="text" value="<?php echo $row["Nic"]?>"  id="nic" name="nic">
                                
                            </div>
                            <div class="input-box">
                                <lable for="password">Password</lable>
                                <br>
                                <input type="password" value="<?php echo $row["password"]?>"  id="password" name="password">
                
 
                                
                            </div>
                            <div class="input-box">
                                <lable for="dateofbirth">Date Of Birth</lable>
                                <br>
                                <input type="text" value="<?php echo $row["dob"]?>"  id="date" name="date">
                                
                            </div>
                            <div class="input-box">
                                <lable for="city">City</lable>
                                <br>
                                <input type="text" value="<?php echo $row["city"]?>"  id="city" name="city">
                                
                            </div>
                            <div class="input-box">
                                <lable for="country">Country</lable>
                                <br>
                                <input type="text"value="<?php echo $row["county"]?>"  id="country" name="country">
                                
                            </div>

                            <div class="input-box">
                                <lable for="job">Job</lable>
                                <br>
                                <input type="text" value="<?php echo $row["job_name"]?>"  id="job" name="job">
                                
                            </div>

                            
                           
                            <div class="button-container">
                                <button type="submit" id="sumbit" name="submit">Update</button>

                                <button class="delete-btn"><a  href="delete.php?applicant_id=<?php echo $row["applicant_id"];?>">Delete Profile</a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>                 



                <script src="./js/manage.js"></script>


                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>