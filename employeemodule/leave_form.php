<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include_once("employeeComman/connection.php")?>
 
<?php 
    
    $sql = "SELECT * FROM employee_leave WHERE id='3'";
    $row = $conn->query($sql)->fetch_array();

    if(isset($_POST['leavBTN'])) {
        //$employeeId = $_POST['id'];
        $startdate = date("Y-m-d", strtotime($_POST['startdate']));
        $enddate =   date("Y-m-d", strtotime($_POST['enddate']));
        $reason = $_POST['reason'];
        $sql = "INSERT INTO employee_leave VALUES (null,'$startdate','$enddate','$reason',0)";
        // $sql="INSERT INTO employee_leave VALUES (2,'2012-02-12','2012-02-12','2012-02-12',0)";

        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("Saved!")</script>';
        } else {
            echo "Error: ";
        }
    }
?>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                    
                            
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Leave Details</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name:</label>
                                    <input   class="form-control" id="teacherFNameTxt" placeholder="Name" value="<?php  .$row['fname']." ".$row['lname'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Start Date:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="date"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Start Time:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input name = 'endtime' type="time" value="05:00"  class="form-control"  id="enddate" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">End Date:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="date"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">End Time:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input name = 'endtime' type="time" value="05:00"  class="form-control"  id="enddate" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Reason:</label>
                                    <textarea name='reason'  class="form-control" id="messageTxt"  placeholder="" required></textarea>
                                </div>
                            </div>  
                        </form>
                    </div><!-- /.box -->
                </div>
            </div>
        </div>
    </section>
</section>





<?php include_once("employeeComman/footer.php")?>


