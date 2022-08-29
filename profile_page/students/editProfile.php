<?php
    include"image.php";
    $check = "students";
    
    $conn = mysqli_connect('localhost', 'root', '', 'web_skills');

    $id = $_SESSION['user_id'];

    $sql = "SELECT * FROM $check WHERE id =$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    
    $phone = $row['phone'];
    $address = $row['address'];
    $password = $row['password'];
    $image = $row['image_path'];

    if(isset($_POST['submit2'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $sql = "UPDATE $check SET `name`='$name', `phone`='$phone', `address`='$address', `password`='$password' WHERE id = " . $id;
        
        if (mysqli_query($conn, $sql)) {
            header("Location: student.php");
            
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

    if(isset($_POST['submit'])){
        if(!empty($_FILES['upload']['name'])){
            $file_name = $id . $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            
            $file_ext = explode('.', $file_name); 
            $file_ext = strtolower(end($file_ext));

            if(in_array($file_ext, $allowed_ext)) {
                if($file_size <= 1000000) {
                    $target_dir = "../profile_images/${file_name}";
                    if ($image != '../images/account.png'){
                        unlink($image);
                    }

                    move_uploaded_file($file_tmp, $target_dir);
                    $sql = "update $check set image_path='$target_dir' WHERE id =$id";
                    mysqli_query($conn, $sql);
                } 
                else {
                    $message = 'File too large!';
                }
            }
            else {
                $message = 'Invalid file type!';
            }
        }
        else {
            $message = 'Please choose a file';
        }
    }

    if (isset($_POST["remove"])){
        if ($image != '../images/account.png'){
            unlink($image);
        }
        $target_dir = $image = '../images/account.png';
        $sql = "update $check set image_path='$target_dir' WHERE id =$id";
        mysqli_query($conn, $sql);
    }
?>


<head>
    <title> Edit profile </title>
    <link rel="stylesheet" href="../admins/assets/css/editProfileStyle.css">
    <script src="scripts.js"></script>
</head>

<body>

<div class="container1">
    <h2> Update your profile</h2>
    <div class="border"></div>
    <div class="container2">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=1" method="POST">
            <div>
                <div class="column-flex">
                    <label style="font-weight:bold">Name : </label>
                    <input class="update" value="<?= $name ?>" required type="text" name="name">
                </div>

                <!-- <div class="column-flex">
                    <label style="font-weight:bold">Email : </label>
                    <input class="update" value="<?= $email ?>" required type="email" name="email">
                </div> -->

                <div class="column-flex">
                    <label style="font-weight:bold">password : </label>
                    <input class="update" value="<?= $password ?>" required type="password" name="password">
                </div>

                <div class="column-flex">
                    <label style="font-weight:bold">Address: </label>
                    <input class="update" value="<?= $address ?>" required type="text" name="address">
                </div>
                
                <div class="column-flex">
                    <label style="font-weight:bold">phone : </label>
                    <input class="update" value="<?= $phone ?>" required type="text" name="phone">
                </div>

                <input class="btn btn-dark update-student-btn" required type="submit" name="submit2" value="Update profile">
            </div>
        </form>

        <div>
            <div class="picUpdate">
                <button style="height: 40px; width: 40px" onclick="myFunction()" class="edit circle"> <img src="../images/pen.png" alt="edit" class="pic"> </button>
                <img src='<?=$target_dir?>' class="account-pic">
            
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                    <input type="submit" value="Save changes" name="submit"  class="btn_white update-student-btn">

                    <div id="myDropdown" class="dropdown-content" >
                        <label for="upload" class="choosebtn bluebtn">Choose file</label>
                        <input type="file" name="upload" id="upload" hidden/>
                        <?php
                            if ($target_dir != '../images/account.png'){
                                ?>
                                <label class="choosebtn redbtn ">
                                    Remove
                                    <input type="submit" name="remove" id="remove" hidden/>
                                </label>   
                                <?php
                            }
                        ?>
                    </div>
                    
                    <div class="message"><?php echo $message ?? null; ?></div>  
                </form>  
                 
            </div>

        </div>
    </div>
</div>


<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
</script>

</body>
</html>


