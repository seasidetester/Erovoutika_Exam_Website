<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="signup.php" method="post">
            
            <label for="clUrFirstname">First Name</label>
            <input type="text" name="clUrFirstname" placeholder=" First Name ">
            <label for="clUrLastname">Last Name</label>
            <input type="text" name="clUrLastname" placeholder=" Last Name ">
            
            <br>
            <label for="clUrUsername">Username</label>
            <input type="text" name="clUrUsername" placeholder=" Username ">
            
            <br>
            <label for="clUrPassword">Password</label>
            <input type="password" name="clUrPassword" placeholder=" Password ">
            
            <br>
            <label for="clUrcontact_num">Contact Number</label>
            <input type="text" name="clUrcontact_num" placeholder=" Contact Number ">
            
            <label for="clUremail">Email</label>
            <input type="text" name="clUremail" placeholder=" Email ">
            
            <br>
            <label for="clUraddress">Address</label>
            <input type="text" name="clUraddress" placeholder=" Address ">
            <br>
            <button type="submit" formaction="crud/tbusers_adddefault.php"> Sign Up </button>
            <button type="reset"> Clear </button>
        </form>
        <p>Already have an account?</p>
        <a href="login_template.php">
           
            <button>
                Log-in
            </button>
        </a>
        <a href="../index_template.php">
            <p>Return to Homepage</p>
        </a>
    </body>
</html>