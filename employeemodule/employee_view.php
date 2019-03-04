<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include("employeeComman/connection.php") ?>
<!---->
<?php
    $current_user = "erandishanu@gmail.com";
    $sql = "SELECT * FROM employee WHERE email='$current_user'";
    $row = $conn->query($sql)->fetch_array();

    $sql2 = "SELECT * FROM employee_leave WHERE id=16";
    $row2 = $conn->query($sql2)->fetch_array();

    $sql3 = "SELECT * FROM emergencydetails WHERE id=1";
    $row3 = $conn->query($sql3)->fetch_array();

?>

<style type="text/css">
    
    *, *:before, *:after {
    box-sizing: border-box;
    }

    html {
    overflow-y: scroll;
    }

    body {
    background: #c1bdba;
    font-family: 'Titillium Web', sans-serif;
    }

    a {
    text-decoration: none;
    color: #1ab188;
    transition: .5s ease;
    }
    a:hover {
    color: #179b77;
    }

    .form {
    background: rgba(19, 35, 47, 0.9);
    padding: 40px;
    max-width: 1000px;
    margin: 40px auto;
    border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }

    .tab-group {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
    }
    .tab-group:after {
    content: "";
    display: table;
    clear: both;
    }
    .tab-group li a {
    display: block;
    text-decoration: none;
    padding: 8px;
    background: rgba(160, 179, 176, 0.25);
    color: #a0b3b0;
    font-size: 20px;
    float: left;
    width: 33.3%;
    text-align: center;
    cursor: pointer;
    transition: .5s ease;
    }
    .tab-group li a:hover {
    background: #B5E7EB;/* background: #179b77; */
    color: #ffffff;
    }
    .tab-group .active a {
    background:#096CA7;/* background: #1ab188; */
    color: #ffffff;
    }

    .tab-content > div:last-child {
    display: none;
    }

    h1 {
    text-align: center;
    color: #ffffff;
    font-weight: 300;
    margin: 0 0 40px;
    }

    label {
    position: absolute;
    -webkit-transform: translateY(6px);
            transform: translateY(6px);
    left: 13px;
    color: rgba(255, 255, 255, 0.5);
    transition: all 0.25s ease;
    -webkit-backface-visibility: hidden;
    pointer-events: none;
    font-size: 18px;
    }
    label .req {
    margin: 2px;
    color: #1ab188;
    }

    label.active {
    -webkit-transform: translateY(50px);
            transform: translateY(50px);
    left: 2px;
    font-size: 14px;
    }
    label.active .req {
    opacity: 0;
    }

    label.highlight {
    color: #ffffff;
    }

    input, textarea {
    font-size: 22px;
    display: block;
    width: 100%;
    height: 100%;
    padding: 5px 10px;
    background: none;
    background-image: none;
    border: 1px solid #a0b3b0;
    color: #ffffff;
    border-radius: 0;
    transition: border-color .25s ease, box-shadow .25s ease;
    }
    input:focus, textarea:focus {
    outline: 0;
    border-color: #1ab188;
    }

    textarea {
    border: 2px solid #a0b3b0;
    resize: vertical;
    }

    .field-wrap {
    font-size: 12px;
    position: relative;
    margin-bottom: 30px;
    }

    .top-row:after {
    content: "";
    display: table;
    clear: both;
    }
    .top-row > div {
    float: left;
    width: 48%;
    margin-right: 4%;
    }
    .top-row > div:last-child {
    margin: 0;
    }

    .button {
    border: 0;
    outline: none;
    border-radius: 0;
    padding: 15px 0;
    font-size: 2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .1em;
    background: #1ab188;
    color: #ffffff;
    transition: all 0.5s ease;
    -webkit-appearance: none;
    }
    .button:hover, .button:focus {
    background: #179b77;
    }

    .button-block {
    display: block;
    width: 100%;
    }

    .forgot {
    margin-top: -20px;
    text-align: right;
    }

    #image {
    padding-top: 5px;
    float-left:2px;
    width: 100px;
    height: 120px;
    margin: 5px;
    }

    #details {
        padding-top: 2px;
        float-left:20px;
        width: 50px;
        height: 100px;
        margin: 1px;
    }

    /* .table {
    font-size: 18px;
    position: relative;
    margin-bottom: 30px;
    margin: 2px;
    color: #1ab188;
    } */

    table {
    font-family: arial, sans-serif;
    font-size: 18px;
    border-collapse: collapse;
    color: #000000;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }



</style>

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
                                                                <tr>
                                                                    <td><?php  echo $row2['startdate']?></td>
                                                                    <td><?php  echo $row2['enddate']?></td>
                                                                    <td><?php  echo $row2['reason']?></td>
                                                                    <td><?php  echo $row2['approved']?></td>
                                                                </tr>                                                                  
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
