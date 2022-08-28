<?php
    $conn=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($conn,'web_skills'); 

    if(!$conn){
        die("Error: Failed to connect to database!");
    }
    session_start();
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $sql="SELECT * FROM students WHERE id='".$id."'";
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
    <link rel="stylesheet" href="assets/css/moreinfo_student.css">
    <title>Student_Profile</title>
</head>

<body class="profile-page">
      
       <!----------------Start Nav bar----------------->
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
                        <a href="student.php"> Your profile </a>
                        <a href="edit_student.php"> settings </a>
                        <a href="logout.php"> sign out</a>
                    </div>
                </div>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
      <!----------------End Nav bar----------------->


      <!---------------- Start Info----------------->
    <div class="container">
         <div class="grid-container" class="new-flex">
                <div class="account-pic">
                <?php  echo "<div ><img src='".$RowData['image_path']."' class='account-pic'></div>";?>
                </div>
                
                    <h1 class="prof-name"> <?php
                      echo $RowData['name'];
                     ?></h1>
                    <ul class="del">
                        <li> <img src = "assets/images/mail.png" class="details"> </li>
                        <div class="align"> <?php echo $RowData['email'];?></div>
                        <li><img src = "assets/images/phone.png"   class="details"> </li>
                        <div class="align"> <?php echo $RowData['phone'];?> </div> 
                    </ul>
         
            </div>


     <?php
     echo "<div class='new-flex'>";
        echo "<table >";
        


        echo "<tr class='dlabel'>";
        
            echo "<th class='n'>";
            echo "ID : ";
            echo "</td>";
    
            echo "<td>";
            echo $RowData['id'];
            echo "</td>";

        echo "</tr>";

        
        echo "<tr class='dlabel'>";

                echo "<th class='n'>";
                echo "Address : ";
                echo "</td>";
        
                echo "<td>";
                echo $RowData['address'];
                echo "</td>";
        
        echo "</tr>";

        echo "<tr class='dlabel'>";

                echo "<th class='n'>";
                echo "Birth Date : ";
                echo "</td>";
        
                echo "<td>";
                echo $RowData['birth_date'];
                echo "</td>";

        echo "</tr>";

        echo "<tr class='dlabel'>";

                echo "<th class='n'>";
                echo "Password : ";
                echo "</td>";
        
                echo "<td>";
                echo $RowData['password'];
                echo "</td>";

        echo "</tr>";

        echo "<tr class='dlabel'>";

                echo "<th class='n'>";
                echo "Enroll Date : ";
                echo "</td>";
        
                echo "<td>";
                echo $RowData['enroll_date'];
                echo "</td>";

        echo "</tr>";

        echo "<tr class='dlabel'>";

                echo "<th class='n'>";
                echo "Gender : ";
                echo "</td>";
        
                echo "<td>";
                echo $RowData['gender'];
                echo "</td>";
        
        echo "</tr>";

        
        echo "</table>";
    echo "</div>";
     ?>

    <!----------------End Info----------------->

   
    <!-- --------------- start tab --------------- -->

    <!-- <div class="tab">
        <button class="tablinks tab-border" onclick="openTabs(event, 'Edit-student-table')"> <a href="edit_student.php?id=' . $RowData['id'] . '">Edit Profile </a></button>
    </div> -->

    </div>
    <!-- --------------- End tab --------------- -->


    </body>
</html>
