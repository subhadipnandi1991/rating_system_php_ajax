<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rating System</title>
	<!-- style.css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main">
		<div id="header">
			<h1>Rating System</h1>
				<div class="user-info">
					<span>Hello,</span> |
					<a href="logout.php">Logout</a>
				</div>
				<div class="user-info">
					<a href="login.php">Login</a>
				</div>
		</div>
		<div id="content">
					<div class="post-box">
						<h3></h3>
						<p></p>
								<ul class="rating" id="rating_">
								</ul>
								<span class="rated"></span>
									<ul class="rating" id="rating_">
									</ul>
									<span class="rated"></span>
						<input type="hidden" class="post_id" value="" />
				</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
	</script>
</body>
</html>
