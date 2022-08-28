<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn= mysqli_connect('localhost', 'root', '', 'web_skills')
        or die("Error connecting to MySQL server failed." .mysqli_connect_error());

        $_POST['name'];

        if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])){
            
            $fullname= $_POST['name'];
            $phone= $_POST['telephone'];
            $email= $_POST['email'];
            $cmdd = "select * from students where email='$email'";
            $query = mysqli_query($conn, $cmdd);
            
            $res = mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");
            $numOfEmails = mysqli_num_rows($res);
            
            if($numOfEmails > 0){
                ?>
                    <script>
                        window.location.href = "index.php?errorSign=Email already exists.";
                    </script>
                <?php
                exit();
            }

            if($query){
                header("Location: index.php");                
            }
            
            $gender = $_POST['gender'];
            echo $_POST['gender'];

            $address= $_POST['address'];

            $birthdate= date('Y-m=d', strtotime($_POST['birth_date']));
            
            //set the current date to a varible
            $enrolldate = date('Y-m=d');

            $password= $_POST['password'];
            
            $sql = "INSERT INTO `students` (`name`, `phone`, `enroll_date`, `birth_date`, `gender`, `address`, `email`, `password`, `is_active`) 
                                    VALUES ('$fullname', '$phone', '$enrolldate', '$birthdate', '$gender', '$address', '$email', '$password', '0')";

            $query = mysqli_query($conn, $sql);
            if($query){
                echo "Successfully registered";
            }
            else{
                echo "Error";
            }
            sleep(5);
            header('Location: index.php');
            
        }
    }
?>