<?php
    include_once('connection.php');  
    $sql="SELECT * FROM students";
    $result= mysqli_query($conn,$sql);  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="student_profile1.css">
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
                <a href="zero.php">
                    <li class="active" >home</li>
                </a>
                <div class="dropdown">
                    <img class="img-profile" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9G0Vljlks1FAL2ugPhUWzLs4zEZPBLf9Ffg&usqp=CAU" alt="profile">
                    <div class="content">
                        <a href="student_profile1.php"> Your profile </a>
                        <a href="edit_student.php"> settings </a>
                        <a href="log-out.php"> sign out</a>
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

            <button class="profileBtn btn btn-dark"><a href="Student-Profile2.php"> More Info </a></button>
          
        </div>
    </div>

 <!-- --------------- start tabs --------------- -->

 <div class="tab">
        <button class="tablinks tab-border" onclick="openTabs(event, 'Edit-student-table')"> <a href="edit_student.php?id=' . $RowData['id'] . '">Edit Profile </a></button>
        <button class="tablinks" onclick="openTabs(event, 'log-out')">  <a href="log-out.php"> sign out</a>  </button>
    </div>

    
    <!-- --------------- End tabs --------------- -->

</body>
</html>

