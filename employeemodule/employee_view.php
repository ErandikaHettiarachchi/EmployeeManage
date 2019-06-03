<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include("employeeComman/connection.php") ?>

<?php

    $current_user = $_SESSION["user"];
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM employee WHERE email='$current_user'";
    $row = $conn->query($sql)->fetch_array();

    $sql2 = "SELECT * FROM employee_leave WHERE id='$id'";
    //$row2 = $conn->query($sql2)->fetch_array();

    $sql3 = "SELECT * FROM emergencydetails WHERE id='$id'";
    $row3 = $conn->query($sql3)->fetch_array();

?>

<link rel="stylesheet" type="text/css" href="employeeComman/assets/css/employee_view_style.css" media="screen" />

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Employee Details</h3>
                        </div>
                        <form role="form" action="" method="">
                            <div class="box-body">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-1">
                                            
                                        </div>
                                        <!-- <div class="col-md-2">
                                            <img src="employeeComman/upload/1.jpg" id="image" alt="User Image">
                                        </div> -->
                                        <!-- <div class="col-md-6"id="details">
                                        
                                                <div class="">
                                                        <label id="fnamelabel">
                                                            <?php  echo $row['fname']." ".$row['lname']; ?>
                                                        </label>
                                                </div>
                                                <div class="">
                                                        <label id="emaillabel">
                                                            <?php  echo $row['email']?>
                                                        </label>
                                                </div>
                                                <div class="">
                                                        <label id="departmentlabel">
                                                            <?php  echo $row['department']?>
                                                        </label>
                                                </div>
                                                 <div class="">
                                                        <label id="phonelabel">
                                                            <?php  echo $row['phone']; ?>
                                                        </label>
                                                </div>
                                        
                                        </div> -->
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form">
                                            <ul class="tab-group">
                                                <li class="tab active"><a href="#general">General Info</a></li>
                                                <li class="tab"><a href="#leave">Leave</a></li>
                                                <li class="tab"><a href="#emergency">Emergency Ifo</a></li>
                                            </ul>
                                            
                                            <div class="tab-content">
                                                
                                                <div id="general">   
                                                    <form action="/" method="post">
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Name:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label> <?php  echo $row['fname']." ".$row['lname']; ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Address:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label> <?php  echo $row['fname']." ".$row['lname']; ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Email:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label> <?php  echo $row['email']?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Telephone:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label> <?php  echo $row['phone']; ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Name:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label> <?php  echo $row['fname']." ".$row['lname']; ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                                <div id="leave">   
                                                    <form action="/" method="post">
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                            <table class="table">
                                                                <tr>
                                                                    <th>Start</th>
                                                                    <th>End</th>
                                                                    <th>Reason</th>
                                                                    <th>Approved</th>
                                                                </tr>
                                                                <?php
                                                                if ($result = $conn->query($sql2)) {
                                                                    while ($row2 = $result->fetch_assoc()) {?>
                                                                    <!-- $row2 = $conn->query($sql2)->fetch_array(); -->
                                                                        <tr>
                                                                            <td><?php  echo $row2['startdate']?></td>
                                                                            <td><?php  echo $row2['enddate']?></td>
                                                                            <td><?php  echo $row2['reason']?></td>
                                                                            <td><?php  echo $row2['approved']?></td>
                                                                        </tr>
                                                              <?php }
                                                                }?>
                                                                                                                                  
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div id="emergency">   
                                                    <form action="/" method="post">
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Contact Person:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label><?php echo $row3['cntperson'];?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Address:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label><?php echo $row3['address'];?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Contact Number:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label><?php echo $row3['contact'];?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Blood Group:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label><?php echo $row3['blood'];?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-wrap">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Allergies:</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label><?php echo $row3['allergic'];?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div><!-- tab-content -->
                                        </div>
                                    </div>
                
                                </div>
                            </div><!-- /.box-body -->
                        </form>
                    </div>
                </div>
                </div>
            <div>
        </div>
    </section>
</section>

<?php include_once("employeeComman/footer.php")?>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script>

    $('.form').find('input, textarea').on('keyup blur focus', function (e) {
    
    var $this = $(this),
        label = $this.prev('label');

        if (e.type === 'keyup') {
                if ($this.val() === '') {
            label.removeClass('active highlight');
            } else {
            label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight'); 
                } else {
                label.removeClass('highlight');   
                }   
        } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
                label.removeClass('highlight'); 
                } 
        else if( $this.val() !== '' ) {
                label.addClass('highlight');
                }
        }

    });

    $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');

    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
    });
</script>
