<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            New User Registration
        </title>

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="admincss/header-footer.css">
        <link rel="stylesheet" type="text/css" href="admincss/admin-add-new-user.css">
        <link rel="stylesheet" type="text/css" href="admincss/font.css">
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


        <a class="back-to-admin" href="adminHome.php">Back to Admin Page</a>

        <div class="container">
            <form id="admin-add-user-form"  action="adduser.php" method="POST">
                <h2>New User Registration</h2>
                <div class="content">
                    <div class="input-box">
                        <lable for="first-name">First Name</lable>
                        <br>
                        <input type="text" placeholder="Enter First Name" id="firstname" name="firstname" onkeyup="validateFname()" >
                        <span id="fname-error"></span>
                    </div>
                    <div class="input-box">
                        <lable for="last-name">Last Name</lable>
                        <br>
                        <input type="text" placeholder="Enter Last Name" id="lastname" name="lastname" onkeyup="validateLname()" >
                        <span id="lname-error"></span>
                    </div>
                    <div class="input-box">
                        <lable for="email">Email</lable>
                        <br>
                        <input type="email" placeholder="example@gmail.com" id="email" name="email" onkeyup="validateEmail()" >
                        <span id="email-error"></span>
                    </div>
                    <div class="input-box">
                        <lable for="contact-number">Contact Number</lable>
                        <br>
                        <input type="tel" placeholder="0771234567" id="mobile" name="mobile" onkeyup="validatePhone()" >
                        <span id="mobile-error"></span>
                    </div>
                    <div class="input-box">
                        <lable for="nic">NIC</lable>
                        <br>
                        <input type="text" placeholder="NIC number" id="nic" name="nic" onkeyup="validateNIC()">
                        <span id="nic-error"></span>
                    </div>
                    <div class="input-box">
                        <lable for="user-name">User Name</lable>
                        <br>
                        <input type="text" placeholder="saman@123" id="uname" name="Uname" onkeyup="validateUserName()">
                        <span id="username-error"></span>
                    </div>
                    <div class="input-box">
                        <lable for="Password">Password</lable>
                        <br>
                        <input type="text" placeholder="Enter Password" id="pw1" name="pw1" onkeyup="validatepassword()">
                        <span id="pw1-error"></span>
                    </div>
                    <div class="input-box">
                        <lable for="re-enter-password">Confirm Password</lable>
                        <br>
                        <input type="password" placeholder=" Confirm Password" id="pw2" name="pw2" onkeyup="validatepassword()">
                        <span id="pw2-error"></span>
                    </div>
                    <span class="gender">Gender</span> <br>
                    <div class="gender-category">
                        <input type="radio" id="male" name="gender" value="Male" onkeyup="validateGender()">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female" onkeyup="validateGender()">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="Other" onkeyup="validateGender()">
                        <label for="other">Other</label>
                        <br>
                        <span id="gender-error"></span>
                    </div>
                
                    <div class="button-container">
                        <button type="submit" id="sumbit" name="submit" onclick="return validateForm()">Register</button>
                        <span id="submit-error"></span>
                    </div>
                </div>
            </form>
        </div>
        
        <br>
        <hr style="width: 50%;">
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

        <!-- Javascript -->
        <script src="admin-add-user.js"></script>
        
    </body>
</html>