<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> profile </title>
    
    <link rel="stylesheet" href="/home-page/stylezero.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="scripts.js"></script>
</head>

<body>

    <!-- --------------- Start Navigation Bar --------------- -->

    <div class="navbar">
        <div class="container">
            <div class="brand">
                <img class="book-logo" src="/book2.png" alt="book">
                <h2 class="brand-text"> student system</h2>
            </div>

            <ul class="links">
                <li class="active"><a href="/home-page/zero.php"> home </a></li>

                <div class="dropdown">
                    <img class="img-profile" src="account.png" alt="profile">
                    <i class="fa fa-caret-down"></i>

                    <div class="content">
                        <a href="admin-profile.php"> Your profile </a>
                        <a href="#"> settings </a>
                        <a href="#"> sign out</a>
                    </div>

                </div>
            </ul>
            
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- --------------- End Navigation Bar --------------- -->


    <!-- --------------- start profile body --------------- -->

    <div class="grid-container">
        <div>
            <img src = "account.png" , alt="profile" class="account-pic">
        </div>
        <div>
            <h1> Lama Salah Ahmed </h1> 
            <ul class="del">
                <li> <img src = "mail.png" , alt="mail" class="details"> </li>
                <div class="align"> lamasalah32@gmail.com </div>
                <li><img src = "phone.png" , alt="phone" class="details"> </li>
                <div class="align"> 01023839812 </div> 
            </ul>

            <button class="profileBtn btn btn-dark"> Edit profile </button>
        </div>
    </div>

    
    <!-- --------------- start tabs --------------- -->

    <div class="tab">
        <button class="tablinks tab-border" onclick="openTabs(event, 'Student-table')"> Student table </button>
        <button class="tablinks" onclick="openTabs(event, 'Edit-student-table')"> Edit student table </button>
        <button class="tablinks" onclick="openTabs(event, 'reqests')"> Reqests </button>
    </div>

    <div id="Student-table" class="tabcontent">
        <p>Student table</p>
    </div>

    <div id="Edit-student-table" class="tabcontent" style="display:none">
        <?php include 'manage-students.php'; ?>
    </div>

    <div id="reqests" class="tabcontent" style="display:none">
        <?php include 'requests.php'; ?>
    </div>
    
    <!-- --------------- End tabs --------------- -->

</body>
</html>

