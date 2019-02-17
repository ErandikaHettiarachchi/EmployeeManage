<?php include("employeeComman/connection.php") ?>

<?php 
    $current_user = "erandishanu@gmail.com";
    $sql = "SELECT * FROM employee WHERE email='$current_user'";
    $row = $conn->query($sql)->fetch_array();
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="employeeComman/upload/1.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p id="user">Employee</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="employee_view.php"><i class="fa fa-home"></i> <span>Home</span></a></li>

            <li><a href="emergency.php"><i class="fa fa-bullhorn"></i> <span>Emergncy</span></a></li>

            <li><a href="leave_form.php"><i class="fa fa-edit"></i> <span>Leave Form</span></a></li>

            <li><a href="update.php"><i class="fa fa-gears"></i> <span>Update</span></a></li>


<!--                <li class="treeview">-->
<!--                <a href="#"><i class="fa fa-user"></i> <span>Employee</span>-->
<!--                    <span class="pull-right-container">-->
<!--                <i class="fa fa-angle-left pull-right"></i>-->
<!--              </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="add.php">Add User</a></li>-->
<!--                    <li><a href="#">Edit User</a></li>-->
<!--                    <li><a href="../viewuser.php">Delete User</a></li>-->
<!--                </ul>-->
<!--            </li>-->

        </ul>
    </section>
</aside>

