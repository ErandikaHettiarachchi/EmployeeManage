<?php

    session_start();

    include("employeeComman/connection.php");

    $current_user = "erandishanu@gmail.com";
    $sql = "SELECT * FROM employee WHERE email='$current_user'";
    $row = $conn->query($sql)->fetch_array();

    $sql2 = "SELECT * FROM employee_leave WHERE id=1";
    //$row2 = $conn->query($sql2)->fetch_array();

    $sql3 = "SELECT * FROM emergencydetails WHERE id=1";
    $row3 = $conn->query($sql3)->fetch_array();

?>