<?php
    include_once('connection.php');  
    $req="SELECT * FROM students";
    $result= mysqli_query($conn,$req);  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="student_profile.css">
    <title>Student_Profile1</title>
</head>

<body class="profile-page">
    
    <div class="navbar">
        <div class="container">
            <div class="brand">
                <img class="logo" src=https://cdn-icons-png.flaticon.com/512/327/327131.png alt="university">
                <h2 class="brand-text">Student System</h2>
            </div>
            <ul class="links">
                <a href="#">
                    <li class="active" href="zero.php">home</li>
                </a>
                <div class="dropdown">
                    <img class="img-profile" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9G0Vljlks1FAL2ugPhUWzLs4zEZPBLf9Ffg&usqp=CAU" alt="profile">
                    <div class="content">
                        <a href="student_profile.php"> Your profile </a>
                        <a href="#"> settings </a>
                        <a href="#"> sign out</a>
                    </div>
                </div>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

       <?php
                $RowData=mysqli_fetch_assoc($result);
        ?>

       
    
 <div class="grid-container">
        <div class="account-pic">
        <?php  echo "<div ><img src='images/".$RowData['image'].";'></div>";?>
        </div>
        <div>
            <h1> <?php
              echo $RowData['name'];
             ?></h1>
            <ul class="del">
                <li> <img src = "mail.png" class="details"> </li>
                <div class="align"> <?php echo $RowData['email'];?></div>
                <li><img src = "phone.png"   class="details"> </li>
                <div class="align"> <?php echo $RowData['phone'];?> </div> 
                
            </ul>

            <button class="profileBtn btn btn-dark"><a href="student_profile2.php"> More Info </a></button>
          
        </div>
    </div>

 <!-- --------------- start tabs --------------- -->

 <div class="tab">
        <button class="tablinks tab-border" onclick="openTabs(event, 'Edit-student-table')"> Edit Profile </button>
        <button class="tablinks" onclick="openTabs(event, 'requests')"> Sign Out </button>
    </div>

    
    <!-- --------------- End tabs --------------- -->

</body>
</html>
