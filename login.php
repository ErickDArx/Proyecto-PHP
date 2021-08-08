<?php
session_start();
if(!empty($_SESSION['login_user']))
{
header('Location: index.php');
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Aeropuerto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: #368B85;">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Principal <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Mision / Vision</a>
                    </li>

                    <?php

                    if (empty($_SESSION['login_user'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Acceder</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="registro.php">Registrame</a>
                        </li>
                    <?php
                    }
                    ?>

                </ul>

            </div>
        </nav>
    </header>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/validation.min.js"></script>

</body>

</html>