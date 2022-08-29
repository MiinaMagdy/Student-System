<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost", "root", "", "web_skills") or die("Connection failed: " . mysqli_connect_error());
        $sql = "UPDATE students SET `is_active`='1' WHERE id = " . $_GET['id'];
        $result = mysqli_query($conn, $sql);
        if ($result) {
            ?>
            <script>
                alert("Record approved successfully");
                window.location.href = "admin.php";
            </script>
            <?php
        }
        else {
            die(mysqli_error($conn));
        }
    }
?>
