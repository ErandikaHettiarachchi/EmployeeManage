<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include_once("employeeComman/connection.php")?>
 
<?php 
    
    $sql = "SELECT * FROM emergencydetails WHERE id=1";
    $row = $conn->query($sql)->fetch_array();


?>


<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title"><b>Emergency Information</b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Contact Person:</label>
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                </div>
                                <div class="form-group">
                                    <label>Blood Group:</label>
                                </div>
                                <div class="form-group">
                                    <label>Allergies:</label>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="form-group">
                                    <label><?php echo $row['cntperson'];?></label>
                                </div>
                                <div class="form-group">
                                    <label><?php echo $row['address'];?></label>
                                </div>
                                <div class="form-group">
                                    <label><?php echo $row['contact'];?></label>
                                </div>
                                <div class="form-group">
                                    <label><?php echo $row['blood'];?></label>
                                </div>
                                <div class="form-group">
                                    <label><?php echo $row['allergic'];?></label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="box-footer">

                    </div>

                </div>
            </div>
        </div>
    </section>
</section>
<?php include_once("employeeComman/footer.php")?>



