<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>

						

					

<!---------------------FORMULARIO PARA REGISTRARSE--------------------------------------------->				
						<form action="insertar.php" method="post">
							<div class="requerido">
								<h3>DATOS PERSONALES</h3>
								<p>*Campos requeridos</p>
							</div>
							
							
							<div class="formail">
								<label>Nombre*</label><br>
								<input name="name" type="text" placeholder="Nombre" required>
							</div>

							<div class="formail">
								<label>Correo electrónico*</label><br>
								<input name="email" type="email" placeholder="email" required>
							</div>

							<div class="formail">
								<label>Contraseña*</label><br>
								<input name="password" type="pass" placeholder="Contraseña" required>
							</div>

    							<div class="btnsubmi">
								<input type="submit" name="register">
								
							</div>
						</form>
					
					</div>
						
				</div>
			</div>
	</div>
</div>
<!--------------------ACA ACABA EL FORMULARIO PARA EL REGISTRO DEL USUARIO  EN LA BD----------->


</body>
</html>