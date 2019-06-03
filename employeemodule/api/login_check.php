<?php 
    include_once("../employeeComman/connection.php");

    // Start the session
    session_start();
    
    if(isset($_POST['loginbtn'])){

        $username=$_POST['user']; //get user email by input
        $passowrd=$_POST['password']; //get user password by input

        //check user available with password in db
        $sql = "Select * from user where email='$username' and password='$passowrd'";
        
        //get result set from sql query
        $result = $conn->query($sql);

        if($result ->num_rows > 0){// check result is available
            // Set session variables
            $_SESSION["user"] = $username;
            $sql_userdata = "Select * from employee where email='$username'";
            $result = $conn->query($sql_userdata);
            $row = $result->fetch_assoc();
            $_SESSION["id"] = $row["id"];
            $_SESSION["fname"] = $row["fname"];
            $_SESSION["lname"] = $row["lname"];
            $_SESSION["gendar"] = $row["gendar"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["address"] = $row["address"];
            $_SESSION["phone"] = $row["phone"];
            $_SESSION["hireddate"] = $row["hireddate"];
            $_SESSION["department"] = $row["department"];

            //redirect to homepage
            header("Location: ../employee_view.php"); 
        
        }else{

            //redirect to login when wrong user data
            header("Location: ../login.php");

            //alert box
            echo "<script type='text/javascript'>alert('Wrong Details!')</script>";
        }
        
    }
    $conn->close();
?>

