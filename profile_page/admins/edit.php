<?php
    $conn = mysqli_connect('localhost', 'root', '', 'web_skills') or die("Connection Failed:" . mysqli_connect_errno());
    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM students WHERE id = " . $_GET['id'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $phone = $row['phone'];
        $enroll_date = $row['enroll_date'];
        $birth_date = $row['birth_date'];
        $gender = $row['gender'];
        $address = $row['address'];
        $email = $row['email'];
        $password = $row['password'];
    }

    
?>

<link rel="stylesheet" href="assets/css/styleupdate.css">
<div class="big-container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?= $_GET['id'] ?>" method="POST">
        <div class="add-student-container">
        <h2>Update Student with id: <?php echo $_GET['id']; ?></h2>
        <div class="column-flex">
            <label>Name: </label>
            <input class="add-student-input-field" value="<?= $name ?>" required type="text" name="name">
        </div>
        <div class="column-flex">
            <label>Address: </label>
            <input class="add-student-input-field" value="<?= $address ?>" required type="text" name="address">
        </div>
        <div class="column-flex">
            <label>Birth date: </label>
            <input class="add-student-input-field" value="<?= $birth_date ?>" required type="date" name="birthdate">
        </div>
        <div class="column-flex">
            <label>Enroll date: </label>
            <input class="add-student-input-field" value="<?= $enroll_date ?>" required type="date" name="enrolldate">
        </div>
        <div class="column-flex">
            <label>Email: </label>
            <input class="add-student-input-field" value="<?= $email ?>" required type="email" name="email">
        </div>
        <div class="column-flex">
            <label>password: </label>
            <input class="add-student-input-field" value="<?= $password ?>" required type="password" name="password">
        </div>
        <div class="column-flex">
            <label>phone: </label>
            <input class="add-student-input-field" value="<?= $phone ?>" required type="text" name="phone">
        </div>
        <p style="display: inline;">Gender: </p>
        <div class="column-flex">
            <label><input required type="radio" <?= $gender == "Male" ? "checked" : "" ?> name="gender" value="Male">Male</label>
            <label><input required type="radio" <?= $gender == "Male" ? "" : "checked" ?> name="gender" value="Female">Female</label>
        </div>
        <input class="btn btn-dark update-student-btn" required type="submit" name="submit" value="Save Changes" onclick="return mess();">
    </div>
</form>
<script type="text/javascript">
    function mess() {
        alert("Student updated successfully");
        return true;
    }
</script>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'web_skills') or die("Connection Failed:" . mysqli_connect_errno());
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $enroll_date = $_POST['enrolldate'];
        $birth_date = $_POST['birthdate'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "UPDATE students SET `name`='$name', `phone`='$phone', `enroll_date`='$enroll_date', `birth_date`='$birth_date', `gender`='$gender', `address`='$address', `email`='$email', `password`='$password' WHERE id = " . $_GET['id'];
        if (mysqli_query($conn, $sql)) {
            ?>
            <script type="text/javascript">
                window.location.href = 'admin.php';
            </script>
            <?php
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</div>