<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>


<?php
    if(isset($_POST['btn'])) {
        $_SESSION["id"] = $_POST['id1'];//"10";
        echo '<script>window.location.href = "http://localhost/employee/admin/Employee/update.php";</script>';
    }
?>
    <section class="content-wrapper">
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">//box
                        <div class="box-header  with-border">
                            <h3 class="box-title">Message </h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" action="test.php">
                            <div class="box-body">
                                <label>User ID:</label>
                                <input name="id1" id="userid">
                                
                                <button name="btn"  type="post" id="btn">send</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div>
            <div>
            </div>
        </section>
    </section>
<?php include_once("employeeComman/footer.php")?>

<script>
    // session_start();
    function call(){
        
        window.location.href = "http://localhost/employee/admin/Employee/update.php";
    }
</script>