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
            Admin Home
        </title>
        
        <link rel="stylesheet" type="text/css" href="admincss/header-footer.css">
        <link rel="stylesheet" type="text/css" href="admincss/font.css">
        <link rel="stylesheet" type="text/css" href="admincss/adminHome.css">
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
                <a href="../index.php"><img class="profile-icon" src="../homepage/images/user.png"></a>
            </div>
        </div>

        <a class="add-new-user" href="admin-add-new-user.php">Add New User</a>
        <br>

        <table class="user-info" border="1">
            <caption>User Information</caption>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Nic</th>
                <th>Country</th>
                <th>Action</th>
            </tr>

            <?php


                //session_start();

                //$rid=$_SESSION['rid'];

            

                $query = "SELECT * from applicant;";

                
                

            
                



                $data=mysqli_query($con,$query);
                $result=mysqli_num_rows($data);

                while($row=mysqli_fetch_array($data)){

                    ?>
                    
                    <tr>
                        <td><?php echo $row["applicant_id"]?></td>
                        <td><?php echo $row["firstname"]?>  <?php echo $row["Lastname"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["Nic"]?></td>
                        <td><?php echo $row["county"]?></td>
                        <td><button class="delete-btn"><a href="applicantdelete.php?applicant_id=<?php echo $row["applicant_id"];?>">Delete</a></td>
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