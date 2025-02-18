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
        
        <link rel="stylesheet" type="text/css" href="../css/header-footer.css">
        <link rel="stylesheet" type="text/css" href="../css/font.css">
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
                        <li><a href="talentpool.php">talent pool</a></li>
                        <li><a href="#">interview</a></li>
                        <li><a href="#">feedback</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right">
                <button class="sign-in"><a href="#">Sign in</a></button>
                <button class="sign-up"><a href="#">Sign up</a></button>
            </div>
        </div>

        <a class="add-new-user" href="admin-add-new-user.php">Add New User</a>
        <br>

        <table class="user-info" border="1">
            <caption>Talent Pool Information</caption>
            <tr>
                <th>Talent Pool Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Skill</th>
                <th>Submisson Date</th>
                <th>Action</th>
            </tr>

            <?php


                //session_start();

                //$rid=$_SESSION['rid'];

            

                $query = "SELECT * from talentpool;";

                
                

            
                



                $data=mysqli_query($con,$query);
                $result=mysqli_num_rows($data);

                while($row=mysqli_fetch_array($data)){

                    ?>
                    
                    <tr>
                        <td><?php echo $row["talentPoolID"]?></td>
                        <td><?php echo $row["fullName"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["dob"]?></td>
                        <td><?php echo $row["skills"]?></td>
                        <td><?php echo $row["submissionDate"]?></td>
                        <td><button class="delete-btn"><a href="talentPoolID.php?talentPoolID=<?php echo $row["talentPoolID"];?>">Delete</a></td>
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