<?php
    $conn = mysqli_connect("localhost", "root", "", "web_skills") or die("Connection failed: " . mysqli_connect_error());
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Record deleted successfully";
            header("Location:admin.php");
        }
        else {
            die(mysqli_error($conn));
        }
    }  
?>