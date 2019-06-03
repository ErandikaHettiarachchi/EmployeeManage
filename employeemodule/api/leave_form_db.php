<?php 

    // get db connection
    include_once("../employeeComman/connection.php");

    // Start the session
    session_start();

    if(isset($_POST['leavBTN'])) {

        //assign variable values
        $startdate = date("Y-m-d", strtotime($_POST['startdate']));
        $enddate =   date("Y-m-d", strtotime($_POST['enddate']));
        $starttime = date("h:m:s", strtotime($_POST['starttime']));
        $endtime =   date("h:m:s", strtotime($_POST['endtime']));
        $reason = $_POST['reason'];
        $id = $_SESSION["id"];

        //insert query
        // $sql = "INSERT INTO employee_leave VALUES (null,'$startdate','$enddate','$enddate','$enddate','$reason',0)";
        $sql="INSERT INTO employee_leave VALUES ('$id','$startdate','$enddate','$starttime','$endtime','$reason',0)";
        

        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("$id")</script>';
            header("Location: ../employee_view.php"); 
            exit();
        } else {
            echo "Error: ";
            header("Location: ../leave_form.php"); 
            exit();
        }
    }
?>