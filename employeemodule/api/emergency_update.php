<?php include_once("../employeeComman/connection.php")?>

<?php 
    session_start();

    if(isset($_POST['saveBtn'])) {
        
        $id = $_SESSION["id"];
        $cntperson = $_POST['cntperson'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $blood = $_POST['blood'];
        $allergic = $_POST['allergic'];

        // $sql="INSERT INTO emergencydetails VALUES ('$id', '$cntperson', '$address', '$contact', '$blood', '$allergic')";
        $sql="UPDATE emergencydetails SET cntperson='$cntperson',address='$address',contact=$contact,blood='$blood',allergic='$allergic' WHERE id='$id'";
        // $sql="UPDATE emergencydetails SET cntperson='1', address ='1', contact =1, blood ='1', allergic ='1' WHERE  id =1";

        if ($conn->query($sql)=== TRUE) {
            echo '<script> alert("$id")</script>';
            header("Location: ../employee_view.php"); 
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            // header("Location: ../leave_form.php"); 
            exit();
        }
    }
?>