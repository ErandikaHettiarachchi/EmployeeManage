<?php
    if(isset($_POST['POST'])) {
        $employeeId = $_POST['id'];
        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $reason = $_POST['reason'];
        // $sql = "INSERT INTO employee_leave ( 'startdate', 'enddate', 'reason', 'approved') VALUES ('$startdate','$enddate','$reason',0)";
        $sql="INSERT INTO employee_leave VALUES (2,'2012-02-12','2012-02-12','2012-02-12',0)";

        if (mysqli_query($mysqli, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: ";
        }

    }

//    if(isset($_POST['viewEmployeeBtn'])) {
//        $sql = "SELECT * FROM employee WHERE id=1";
//    }

?>