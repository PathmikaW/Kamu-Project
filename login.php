<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="banner-area">
		<header>
			<ul class="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Outlets</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">About</a></li>
			</ul>
		</header>

		<div class="banner-text">
			<form action="loginvalid.php" method="post">
				<div class="head">
					<img class="logo" src="logo.png">
					<h2 class="title">Login</h2>
				</div>
				
				<?php if (isset($_GET['error'])) { ?>
     			<p class="error"><?php echo $_GET['error']; ?></p>
     			<?php } ?>
				<label class="username">Username</label>
				<input type="text" name="username" placeholder="Username"><br>
				<label>Password</label>
				<input type="password" name="password" placeholder="Password"><br>
				<button type="submit">Login</button>
          		<a href="signupuser.php" class="ca">Create an account</a>
			</form>

		</div>

	</div>


</body>
</html>