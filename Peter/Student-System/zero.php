<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zero trial</title>
    <link rel="stylesheet" href="stylezero.css">
</head>
<body>
    <!-- --------------- Start Navigation Bar --------------- -->
    <div class="navbar">
        <div class="container">
            <div class="brand">
                <img class="book-logo" src="book.png" alt="book">
                <h2 class="brand-text">student system</h2>
            </div>
            <ul class="links">
                <li class="active" onclick="toHome()"><a href="#">home</a></li>
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
            <form action="connect.php" method="POST" enctype="multipart/form-data">
                <div id="firstSign">

                    <div class="nuser-box">
                        <input name="name" class="filled" type="text" name="" required>
                        <label>Name</label>
                    </div>
                    
                    <div class="nuser-box">
                        <input name="password" class="filled" type="password" name="" required>
                        <label>Password</label>
                    </div>     

                    <div class="nuser-box">
                        <input name="email" class="filled" type="text" name="" required>
                        <label>E-mail</label>
                    </div>
                    
                    <button type="button" onclick="next()">Next</button>
                </div>
                
                <div id="secondSign">

                    <div class="nuser-box">
                        <input name="telephone" type="tel" name="" placeholder="01211036617">
                        <label>Phone</label>
                    </div>
                    
                    <div class="nuser-box" required="">
                        <input name="birth_date" class="" type="date" name="">
                        <label>Birth date</label>
                    </div>     
                     

                    <div class="nuser-box">
                        <input name="address" type="text" name="" placeholder="Ismallia Elgish-st">
                        <label>Address</label>
                    </div>

                    <div class="nuser-box">
                        <input name="image_path" type="file" accept=".jpg, .jpeg, .png">
                        <label>Image file</label>
                    </div>
                    
                    <button name="submit">Submit</button>
                </div>
            </form>
        </div>

        <!-- Login Form -->
        <div id="logIn" class="loginbox">
            <h2>Login</h2>
            <form method="POST" action="connect2.php">
                <div id="firstSign">
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
                <p>Don't have an account? <a on href="#" onclick="toSignUp()" >Register Here.</a> </p>

            </form>

        </div>
    <!-- --------------- End button --------------- -->
    <script src="index.js"></script>
</body>
</html>