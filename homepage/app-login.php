<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/app-login.css">
  </head>
  <body>
        <div class="center">
            <h1>Login</h1>
            <form method="post" action="app-login-php.php">
                <div class="txt_field">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                    <div class="pass">Forgot Password?</div>
                    <input type="submit" name="submit" value="Login">
                    <div class="signup_link">
                    Not a Registered User? <a href="#">Signup</a>
                </div>
            </form>
        </div>

  </body>
</html>
