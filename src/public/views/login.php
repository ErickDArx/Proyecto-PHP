<?php
session_start();
if(!empty($_SESSION['login_user']))
{
header('Location: index.php');
}
?>
<?php
include('layouts/header.php');
?>

<div>
	<div class="container mt-4">
		<div class="row p-0 m-0">
			<div class="col-sm-6">
				<img class="img-fluid"
					src="https://media.discordapp.net/attachments/870349177635360778/870451199973929020/login.jpg?width=450&height=600"
					alt="">
			</div>
			<div class="col-sm-6 d-flex justify-content-center align-items-center">
				<div class="card border-0 login-form row">
					<div class="card-body col-sm-12 justify-content-center align-items-center">
						<h3 class="card-title text-center">Inicio de sesión</h3>
						<div class="card-text">
							//HTML Code
							<div id="box">
								<form action="" method="post">
									Username
									<input type="text" class="input" id="username" />
									Password
									<input type="password" class="input" id="password" />
									<input type="submit" class="button button-primary" value="Log In" id="login" />
									<div id="error"></div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- <div class="container">		
	<form class="form-login" method="post" id="login-form">
		<h2 class="form-login-heading">User Log In Form</h2><hr />
		<div id="error">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
			<span id="check-e"></span>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
		</div>
		<hr />
		<div class="form-group">
			<button type="submit" class="btn btn-default" name="login_button" id="login_button">
			<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
		</div> 
	</form>		
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/ajax-login-script-with-php-and-jquery" title="">Back to Tutorial</a>			
	</div>		
</div> -->

<?php include('layouts/footer.php'); ?>