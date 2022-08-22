<?php
    $conn=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($conn,'web_skills'); 

    if(!$conn){
        die("Error: Failed to connect to database!");
    }
    session_start();
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $sql="SELECT * FROM admins WHERE id='".$id."'";
        $result= mysqli_query($conn,$sql);  
        $RowData=mysqli_fetch_assoc($result);
    }
    else{
        header('Location: ../../home_page/index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Student Profile</title>
    </head>
    
    <body class="profile-page">
        
        <div class="navbar">
            <div class="container">
                <div class="brand">
                    <img class="logo" src="https://cdn-icons-png.flaticon.com/512/327/327131.png" alt="university">
                <h2 class="brand-text">Student System</h2>
            </div>
            <ul class="links">
                <a href="logout.php">
                    <li class="active" >home</li>
                </a>
                <div class="dropdown">
                    <img class="img-profile" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9G0Vljlks1FAL2ugPhUWzLs4zEZPBLf9Ffg&usqp=CAU" alt="profile">
                    <div class="content">
                        <a href="<?= $_SERVER['PHP_SELF'] ?>"> Your profile </a>
                        <a href="edit_student.php"> settings </a>
                        <a href="logout.php"> sign out</a>
                    </div>
                </div>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    

 <div class="grid-container">
        <div class="account-pic">
        <?php  echo "<div><img src='assets/images/".$RowData['image_path']."' class='account-pic'></div>";?>
        </div>
        <div>
            <h1> <?php
              echo $RowData['name'];
             ?></h1>
            <ul class="del">
                <li> <img src = "assets/images/mail.png" class="details"> </li>
                <div class="align"> <?php echo $RowData['email'];?></div>
                <li><img src = "assets/images/phone.png"   class="details"> </li>
                <div class="align"> <?php echo $RowData['phone'];?> </div> 
                
            </ul>

            <a href="editProfile.php"><button class="profileBtn btn btn-dark"> Edit profile </button></a>
          
        </div>
    </div>

    
    <!-- --------------- start tabs --------------- -->

    <div class="tab">
        <button class="tablinks tab-border" onclick="openTabs(event, 'Edit-student-table')"> Edit student table </button>
        <button class="tablinks" onclick="openTabs(event, 'requests')"> Requests </button>
    </div>


    <div id="Edit-student-table" class="tabcontent">
        <?php include 'manage-students.php'; ?>
    </div>

    <div id="requests" class="tabcontent" style="display:none">
        <?php include 'requests.php'; ?>
    </div>
    
    <!-- --------------- End tabs --------------- -->
    <script src="assets/js/scripts.js"></script>

</body>
</html>

