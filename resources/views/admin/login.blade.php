<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/style/css/ch-ui.admin.css')}}">
	<link rel="stylesheet" href="{{asset('admin/style/font/css/font-awesome.min.css')}}">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>Welcome to Blog Management Platform</h2>
		<div class="form">
			<p style="color:red">Wrong Username</p>
			<form action="#" method="post">
				<ul>
					<li>
					<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="#" alt="">
					</li>
					<li>
						<input type="submit" value="Login"/>
					</li>
				</ul>
			</form>
			<p><a href="#">Back to homepage</a> &copy; 2017 Powered by XiandaCoder</a></p>
		</div>
	</div>
</body>
</html>