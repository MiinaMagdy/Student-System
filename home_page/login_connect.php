<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn= mysqli_connect('localhost', 'root', '', 'web_skills')
        or die("Error connecting to MySQL server failed." .mysqli_connect_error());
        
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $email= $_POST['email'];
            $password= $_POST['password'];
            $sql1="select * from students where email='".$email."'AND password='".$password."'limit 1";
            $sql2="select * from admins where email='".$email."'AND password='".$password."'limit 1";
            $query1 = mysqli_query($conn, $sql1);
            $query2 = mysqli_query($conn,$sql2);
            

            if(mysqli_num_rows($query1)==1)
            {
                $row = mysqli_fetch_assoc($query1);
                if ($row['is_active'] == 0) {
                    ?>
                        <script>
                            window.location.href = "../index.php?error=Your account is not active yet.";
                        </script>
                    <?php
                    exit();
                }

                session_start();
                $_SESSION['user_id'] = $row['id'];
                header('Location: ../profile_page/students/student.php');
            }
            else if(mysqli_num_rows($query2)==1)
            {
                $row = mysqli_fetch_assoc($query2);
                session_start();

                $_SESSION['user_id'] = $row['id'];
                echo $id;
                header('Location: ../profile_page/admins/admin.php');
            }
            else{
                ?>
                    <script>
                        window.location.href = "../index.php?error=email or password is incorrect.";
                    </script>
                <?php
            }

        }
        else 
            echo 'Erorr Occurred';
          
    }















?>