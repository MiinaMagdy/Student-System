<?php
    $conn = mysqli_connect('localhost', 'root', '', 'web_skills');
    if ($conn->connect_error){  
        die("failed:" .$conn->connect_error);
    }

    $id = 1; // = $_GET['id']
    $target_dir = 'pictures/account.png';

    $sql = "SELECT * FROM students WHERE id =1"; //= $id
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!empty($row['image_path'])){
        $target_dir = $row['image_path'];
    }

?>