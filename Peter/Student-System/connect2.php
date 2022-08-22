<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn= mysqli_connect('localhost', 'root', '', 'web_skills')
        or die("Error connecting to MySQL server failed." .mysqli_connect_error());
        
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $email= $_POST['email'];
            $password= $_POST['password'];
            $sql1="select * from students where email='".$email."'AND password='".$password."'limit 1";
            $sql2="select * from admins where  email='".$email."'AND password='".$password."'limit 1";
            $query1 = mysqli_query($conn, $sql1);
            $query2 = mysqli_query($conn,$sql2);
            
            if(mysqli_num_rows($query1)==1)
            {
                echo "You Have Successfully Logged in student tabel";
                
                exit();
            }
            else if(mysqli_num_rows($query2)==1)
            {
                echo "You Have Successfully logged in admin tabel";
                exit();
            }
            else{
                echo "You Have Entered Incorrect Password";
                exit();
            }

        }
        else 
            echo 'Erorr Occurred';
          
    }















?>