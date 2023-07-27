<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php include('errors.php'); ?>
    <div class="logo">
        <img src="new logo copy.jpeg" alt="logo" class="logobsp">
    </div>
    <br>
    <marquee width="100%" direction="left" height="35px">
        This page is compatible in Google Chrome and Microsoft Edge.    
    </marquee>
    <div class="heading">
        <h2>STUDENT REGISTRATION</h2>
    </div>


    <form method="post">
    <div class="box">
        <h1>Login Here</h1>
        <div class="input-box">
            <i class="fa fa-address-card" ></i>
            <input type="text" placeholder="Enter your name" name="username">
        </div>
        <div class="input-box">
            <i class="fa fa-key" ></i>
            <input type="password" placeholder="Password" id="myInput" name="password">
            <span class="eye" onclick="myEye()">
                <i id="hide1" class="fa fa-eye" ></i>
                <i id="hide2" class="fa fa-eye-slash" ></i>
            </span>


        </div>
        <button type="submit" class="login-btn" formaction="server.php" name="login_user">Login</button>
        <div class="login-signup">
             <a href="index.php" class="back-bt">Sign Up</a>
            <a href="enter_email.php" class="back-bt">Forgot Password</a>
        </div>
    </div>
    
    <script>
        function myEye(){
            let x = document.getElementById("myInput");
            let y = document.getElementById("hide1");
            let z = document.getElementById("hide2");

            if (x.type === 'password') {

                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
        
        </script>


</form>
</body>
</html>