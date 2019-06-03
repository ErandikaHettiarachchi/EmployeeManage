<head>
    <meta charset="UTF-8">
    <title>MotorBoss | Login</title>
    <link rel="stylesheet" type="text/css" href="employeeComman/assets/css/login_style.css" media="screen" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>

<body>
  <div class="body"></div>
  <form enctype="multipart/form-data" action="api/login_check.php" method="post">
		<div class="grad"></div>
		<div class="header">
			<div>Motor<span>Boss</span></div>
		</div>
		<br>
		<div class="login">
            <input type="text" placeholder="username" name="user"><br>
            <input type="password" placeholder="password" name="password"><br>
            <button type="post" name='loginbtn' for="exampleInputEmail1">Login</button>
		</div>
  </form>
</body>

