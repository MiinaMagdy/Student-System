<link rel="stylesheet" href="assets/css/styleedit.css">
<button id="btnAddStudent" class="add-student-btn profileBtn btn-dark" onclick="addBtn()">Add Student</button>
<div id="addStudentModal" class="add-student-modal">

  <!-- Modal content -->
  <div class="add-student-modal-content">
        <span class="add-student-modal-close">&times;</span>
        
        <h2>Create New Student</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="add-student-container">
                <div class="column-flex">
                    <label>Name: </label>
                    <input class="add-student-input-field" required type="text" name="name">
                </div>
                <div class="column-flex">
                    <label>Address: </label>
                    <input class="add-student-input-field" required type="text" name="address">
                </div>
                <div class="column-flex">
                    <label>Birth date: </label>
                    <input class="add-student-input-field" type="date" name="birthdate">
                </div>
                <div class="column-flex">
                    <label>Enroll date: </label>
                    <input class="add-student-input-field" required type="date" name="enrolldate">
                </div>
                <div class="column-flex">
                    <label>Email: </label>
                    <input class="add-student-input-field" required type="email" name="email">
                </div>
                <div class="column-flex">
                    <label>password: </label>
                    <input class="add-student-input-field" required type="password" name="password">
                </div>
                <div class="column-flex">
                    <label>phone: </label>
                    <input class="add-student-input-field" required type="text" name="phone">
                </div>
                <p style="display: inline;">Gender: </p>
                <div class="column-flex">
                    <label><input required type="radio" name="gender" value="Male">Male</label>
                    <label><input required type="radio" name="gender" value="Female">Female</label>
                </div>
                <input class="btn btn-dark create-student-btn" required type="submit" name="submit" value="Create student" onclick="return mess();">
            </div>
        </form>
        <script type="text/javascript">
            function mess() {
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
                
                $res = mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");
                $numOfEmails = mysqli_num_rows($res);
                if($numOfEmails > 0){
                    ?>
                        <script>
                            window.location.href = "admin.php?errorAdd=Email already exists.";
                        </script>
                    <?php
                    exit();
                }
                $sql = "INSERT INTO `students` (`name`, `phone`, `image_path`, `enroll_date`, `birth_date`, `gender`, `address`, `email`, `password`, `is_active`) VALUES ('$name', '$phone', '', '$enroll_date', '$birth_date', '$gender', '$address', '$email', '$password', '1')";
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
  
</div>
<table class="edit-table">
    <thead>
        <tr>
            <th class="edit-table-th" scope="col">#</th>
            <th class="edit-table-th" scope="col">Name</th>
            <th class="edit-table-th" scope="col">Phone</th>
            <th class="edit-table-th" scope="col">Enroll Date</th>
            <th class="edit-table-th" scope="col">Birth Date</th>
            <th class="edit-table-th" scope="col">Gender</th>
            <th class="edit-table-th" scope="col">Address</th>
            <th class="edit-table-th" scope="col">Email</th>
            <th class="edit-table-th" scope="col">Password</th>
            <th class="edit-table-th" scope="col">Edit</th>
            <th class="edit-table-th" scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "web_skills") or die("Connection failed: " . mysqli_connect_error());
            $sql = "SELECT * FROM students";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($query)) {
                if (!$row['is_active']) {
                    continue;
                }
                echo '<tr class="edit-table-tr">';
                echo '<th scope="row">' . $row['id'] . '</th>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['enroll_date'] . '</td>';
                echo '<td>' . $row['birth_date'] . '</td>';
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['password'] . '</td>';
                echo '<td><a href="edit.php?id=' . $row['id'] . '"><img src="../images/edit.png" alt="edit" class="icon-tools"></a></td>';
                echo '<td><a href="delete.php?id=' . $row['id'] . '"><img src="../images/delete.png" alt="delete" class="icon-tools"></a></td>';
                echo "</tr>";
            }
        ?>
    </tbody>
    
</table>

<script src="assets/js/addStudentModal.js"></script>