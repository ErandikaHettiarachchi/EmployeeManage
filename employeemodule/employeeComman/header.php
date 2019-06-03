<!DOCTYPE html>
<?php session_start();?>
<body class="hold-transition skin-blue sidebar-mini">
<header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>G</b>LH</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><font color="white" face="georgia" size="5"><strong> Motor</strong>
        </font><font color="red" face="georgia" size="5"> Boss </font> </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
              
                <!-- Tasks Menu -->
                
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo 'employeeComman/upload/'. $_SESSION["id"].'.jpg'?>" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $_SESSION["fname"]." ".$_SESSION["lname"] ?></span>
                        <!-- <button href="../../../admin/index.php" class="btn btn-default btn-flat">Sign out</button> -->
                    </a>
                    <ul class="dropdown-menu">
                        
                        <li class="user-header">
                            <img src="<?php echo 'employeeComman/upload/'. $_SESSION["id"].'.jpg'?>" class="img-circle" alt="User Image">

                            <p>
                                Employee
                                <small></small>
                            </p>
                        </li>
                        
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="../../../admin/index.php" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
    </nav>
</header>
</body>