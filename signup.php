<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <link rel="stylesheet" href="./stylesheet/signup.css">

</head>

<body>

    <form action="signup_config.php" method="POST" style="border:1px solid #ccc">
        <div class="container">
            <h1>Signup</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="cpassword" required>

            <label>
                <input type="checkbox" checked="checked" name="remember" 
                style="margin-bottom:15px">Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style:"color:dodgerblue">
                Terms & Privacy
            </a></p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
    
        </div>
    
    </form>
</body>
</html>