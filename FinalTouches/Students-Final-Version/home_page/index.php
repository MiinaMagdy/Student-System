
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- --------------- Start Navigation Bar --------------- -->
    <div class="navbar">
        <div class="container">
            <div class="brand">
                <img class="university-logo" src="../profile_page/images/university.png" alt="University">
                <h2 class="brand-text">student system</h2>
            </div>
            <ul class="links">
                <li class="active" onclick="toHome()"><a href="index.php">home</a></li>
                <li><a href="#" onclick="toLogin()">log in</a></li>
                <li><a href="#" onclick="toSignUp()">sign up</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- --------------- End Navigation Bar --------------- -->
    
    <!-- --------------- Start button --------------- -->
    
    <div id="cont" class="container">
        <div id="welCome" class="welcome">
            <h1>Welcome to Student System</h1>
            <p>Sign up to be one of our Students</p>
            <button class="btn btn-dark" onclick = "toSignUp()">Sign Up</button>
            <p>Log in and continue your hard work</p>
            <button class="btn btn-white" onclick="toLogin()">Log in</button>
        </div>
        
        <div id="signUp" class="sign-up">
            <h2>Sign Up</h2>
            <form action="signup_connect.php" method="POST" enctype="multipart/form-data">
                
                <div id="firstSign">
                    <?php
                        echo (isset($_GET['errorSign']) ? '<h4 style="color:#990000; margin-top:10px;margin-bottom:10px;">' . $_GET['errorSign'] . '</h4>' : '');
                    ?>
                    <div class="nuser-box">
                        <input name="name" class="filled" type="text" required=""/>
                        <label>Name</label>
                    </div>
                    
                    <div style="margin-bottom: 20px; margin-top: 10px;" > 
                        <label style="color:#eee; ">Gender: </label>
                        <br>

                        <input id="radio1" name="gender" type="radio" value="Male" style="margin-left:100px" />
                        <label id="Male" for="radio1" style="color:#F9F9F9; padding-right:25px;">Male</label>
                        
                        <input id="radio2" name="gender" type="radio" value="Female" />
                        <label id="Female" for="radio2" style="color :#F9F9F9; padding-right:25px;">Female</label>

                    </div>

                    <div class="nuser-box">
                        <input name="password" class="filled" type="password" required=""/>
                        <label>Password</label>
                    </div>     

                    <div class="nuser-box">
                        <input name="email" class="filled" type="text" required=""/>
                        <label>E-mail</label>
                    </div>
                    
                    <button type="button" onclick="next()">Next</button>
                </div>
                
                <div id="secondSign">
                    <div class="nuser-box">
                        <input name="telephone" type="tel" required=""/>
                        <label>Phone</label>
                    </div>
                    
                    <div class="nuser-box" required="">
                        <input name="birth_date" class="" type="date">
                        <label>Birth date</label>
                    </div>     

                    <div class="nuser-box">
                        <input name="address" type="text" required=""/>
                        <label>Address</label>
                    </div>

                    <button name="submit">Submit</button>
                </div>
            </form>
        </div>

        <!-- Login Form -->
        <div id="logIn" class="loginbox">
            <h2>Login</h2>
            <form method="POST" action="login_connect.php">
                <div id="firstSign">
                    <?php
                        echo (isset($_GET['error']) ? '<h4 style="color:#990000; margin-top:10px;margin-bottom:10px;">' . $_GET['error'] . '</h4>' : '');
                    ?>
                    <div class="nuser-box">
                        <input name="email" type="text" name="" required="" >
                        <label>E-mail</label>
                    </div>

                    <div class="nuser-box">
                        <input name="password" type="password" name="" required="" >
                        <label>Password</label>
                    </div>     
                    
                    <button name="submit">Login</button>
                </div>
                <p style="color: #eee;" >Don't have an account? <a style="color: #ffe485; padding-left: 5px;" on href="#" onclick="toSignUp()" >Register Here.</a> </p>
            </form>
        </div>
    <!-- --------------- End button --------------- -->
    <script src="assets/js/index.js"></script>
    <?php
        echo (isset($_GET['error']) ? '<script>toLogin();</script>' : '');
    ?>
    <?php
        echo (isset($_GET['errorSign']) ? '<script>toSignUp();</script>' : '');
    ?>
</body>
</html>
