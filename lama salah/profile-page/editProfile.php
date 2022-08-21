<?php
    include"image.php";

    $conn = mysqli_connect('localhost', 'root', '', 'web_skills');
    $id = 1; // = $_GET['id']

    $sql = "SELECT * FROM students WHERE id =1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $phone = $row['phone'];
    $address = $row['address'];
    $email = $row['email'];
    $password = $row['password'];
    $image = $row['image_path'];

    if(isset($_POST['submit2'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE students SET `name`='$name', `phone`='$phone', `address`='$address', `email`='$email', `password`='$password' WHERE id = " . $_GET['id'];
        if (mysqli_query($conn, $sql)) {
            ?>
            <script type="text/javascript">
                window.location.href = 'http://localhost/student_system/profile-page/admin-profile.php';
            </script>
            
            <?php
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

    if(isset($_POST['submit'])){
        if(!empty($_FILES['upload']['name'])){
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "profile_images/${file_name}";

            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            if(in_array($file_ext, $allowed_ext)) {
                if($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    $oldFile = "profile_images/${image}";
                    unlink($oldFile);
                    $sql = "update students set id=$id, image_path='$target_dir'";
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
?>


<head>
    <title> Edit profile </title>
    <link rel="stylesheet" href="editProfileStyle.css">
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

                <div class="column-flex">
                    <label style="font-weight:bold">Email : </label>
                    <input class="update" value="<?= $email ?>" required type="email" name="email">
                </div>

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
            <div>
                <img src='<?=$target_dir?>' class="account-pic">
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                <label class="custom-file-upload">
                    <div  class="btn_white update-student-btn">Choose file</div>
                    <input type="file" name="upload"/>
                </label>
                <input type="submit" value="update" name="submit"  class="btn_white update-student-btn">
                <div class="message"><?php echo $message ?? null; ?></div>   
            </form>       
        </div>
    </div>
</div>

</body>
</html>


