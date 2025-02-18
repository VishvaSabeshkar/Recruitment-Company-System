<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign-up.css">
    <link rel="stylesheet" type="text/css" href="../../homepage/css/font.css">

    <title>Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="../../homepage/re-signup.php"   method="POST" >
                <h1>Recruiter Sign Up</h1>
                
                <span>Please fill the form to sign up as an Recruiter</span>
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="lastname" placeholder="Last Name" required>
                <input type="text" name="nic" placeholder="NIC" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="submit" id="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="../../homepage/app-signup.php"   method="POST" >
                <h1>Applicant Sign Up</h1>
                
                <span>Please fill the form to sign up as an Applicant</span>
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="lastname" placeholder="Last Name" required>
                <input type="text" name="nic" placeholder="NIC" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hello!</h1>
                    <p>If you wish to sign up as a <strong>APPLICANT</strong> click the button below.</p>
                    <button class="hidden" id="app-signup">Applicant Sign Up</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello!</h1>
                    <p>If you wish to sign up as a <strong>RECRUITER</strong> click the button below.</p>
                    <button class="hidden" id="rec-signup">Recruiter Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="sign-up.js"></script>
</body>

</html>