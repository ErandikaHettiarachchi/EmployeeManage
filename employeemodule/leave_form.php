<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include_once("employeeComman/connection.php")?>
 


<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                    
                            
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Leave Details </h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form enctype="multipart/form-data" action="api/leave_form_db.php" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name:</label>
                                    <input   class="form-control" id="teacherFNameTxt" placeholder="Name" value="<?php echo $_SESSION["fname"]." ".$_SESSION["lname"] ?> " disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Start Date:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" name="startdate" class="form-control pull-right" id="date"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Start Time:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input name = 'starttime' type="time" value="05:00"  class="form-control"  id="enddate" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">End Date:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" name="enddate" class="form-control pull-right" id="date"/>
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
                                <div class="form-group">
                                    <button type="post" name='leavBTN' for="exampleInputEmail1">submit</button>
                                    <!-- <textarea name='reason'  class="form-control" id="messageTxt"  placeholder="" required></textarea> -->
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


