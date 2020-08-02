<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vistas/dist/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vistas/dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vistas/dist/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vistas/dist/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vistas/dist/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vistas/dist/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vistas/dist/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vistas/dist/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vistas/dist/css/util.css">
	<link rel="stylesheet" type="text/css" href="vistas/dist/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #0a0a0a;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
						Iniciar Sesion
					</span>
					
					
					<div class="wrap-input100 validate-input" > 
						<input class="input100" type="text"  name="ingUsuario">
						<span class="focus-input100"></span>
						<span class="label-input100">Usuario</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="ingPassword">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Ingresar
						</button>
					</div>
          <?php

$login = new ControladorUsuarios();
$login->ctrIngresar();
?>
				</form>

				<div class="login100-more" style="background-image: url('vistas/dist/img/c.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vistas/dist/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vistas/dist/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vistas/dist/vendor/bootstrap/js/popper.js"></script>
	<script src="vistas/dist/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vistas/dist/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vistas/dist/vendor/daterangepicker/moment.min.js"></script>
	<script src="vistas/dist/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vistas/dist/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vistas/js/main.js"></script>

</body>
</html>