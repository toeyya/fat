<div id="login-container">
	<div id="login">
		<h1>ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง</h1>
		<form id="login-form" method="post" action="users/admin/auth/login" class="form">

			<div class="form-group">
				<label for="login-username">Email</label>
				<input type="text" class="form-control"  name="email" id="login-username" placeholder="Username">
			</div>

			<div class="form-group">
				<label for="login-password">Password</label>
				<input type="password" class="form-control" id="login-password" name="password" placeholder="Password">
			</div>

			<div class="form-group">

				<button type="submit" id="login-btn" class="btn btn-primary btn-block">Signin &nbsp; <i class="fa fa-play-circle"></i></button>

			</div>
		</form>
		<!--<a href="javascript:;" class="btn btn-default">Forgot Password?</a>-->

	</div> <!-- /#login -->




</div>