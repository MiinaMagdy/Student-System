<?php
    $conn = mysqli_connect('localhost', 'root', '', 'web_skills');
    if ($conn -> connect_error){  
        die("failed:" .$conn->connect_error);
    }

    session_start();
    if(empty($_SESSION['user_id'])){
        
        header("Location: ../../home_page/index.php");
    }
    $id = $_SESSION['user_id'];
    $target_dir = '../images/account.png';

    $sql = "SELECT * FROM students WHERE id =$id"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if (!empty($row['image_path'])){
        $target_dir = $row['image_path'];
    }
?>