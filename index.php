
<!----------------------------------------------------------------------------------------------------------------------------->
<!-- Formulario Login: -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recetario Udebé</title>
	<!------------------------------------------------------------------------------------------------------------------------->
	<!-- Style CSS:  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<!------------------------------------------------------------------------------------------------------------------------->
	<!-- Style:  -->
	<style>
		#boton
		{
			cursor: pointer;
			width: 30px;
		}
	</style>
	<!------------------------------------------------------------------------------------------------------------------------->
	<!-- JS para la Alert: -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	<!-- Formulario del Login: -->
	<!------------------------------------------------------------------------------------------------------------------------->
	<!-- Main Container: -->
	<div class="container">
		<div class="limiter">
			<div class="card ">
	<!------------------------------------------------------------------------------------------------------------------------->
				<!-- Header: -->
				<div class="card-header text-center">
					<h3 class="card-title">Inicio de Sesión</h3>
				</div>
	<!------------------------------------------------------------------------------------------------------------------------->
				<div class="card-body">
					<!-- Formulario: -->
					<form method="POST" class="form-center">
						<!-- Container del Form: -->
						<div class="container">
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- User: -->
							<div class="form-group col-md-12">
								<label class="control-label">Usuario</label>
			        			<input type="text" name="User" id="User" placeholder="Nombre de Usuario" class="form-control" autofocus="">
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Contraseña: -->
							<div class="form-group col-md-12">
								<label class="control-label">Contraseña</label>
			        			<input type="password" name="Pass" id="Pass" placeholder="Contraseña" class="form-control" autofocus="">
			        			<center><img src="img/mostrar.png" id="btn_Pass"></center>

							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Boton enviar: -->
							<div class="card-footer text-center">
								<div class="form-group">
				        			<input type="submit" class="btn btn-lg btn-info text-white" name="enviar" id="enviar" value="enviar">
				        		</div>
							</div>
						</div>
					</form>
					<?php 
					//-- PHP: --
	//--------------------------------------------------------------------------------------------------------------------------
						if (isset($_POST['enviar']))
						{
							# code...
							//Conexion a la Base de Datos:
							$conex = mysqli_connect('localhost','root','', 'recetas');
    						mysqli_set_charset($conex, "utf8");
	//--------------------------------------------------------------------------------------------------------------------------
							$User = trim($_POST['User']);
						    $Contra = trim($_POST['Pass']);
						    //Inserción de Datos:
						    $insert = "INSERT INTO usuario (Usuario, Password) VALUES ('$User','$Contra')";
						    $resultado = mysqli_query($conex, $insert);
						    if ($resultado)
						    {
						    	# code...
						    	?>
	<!-- Formulario de Recetas: -->
	<!------------------------------------------------------------------------------------------------------------------------->
	<!-- Main Container: -->
	<div class="container">
		<div class="limiter">
			<div class="card ">
	<!------------------------------------------------------------------------------------------------------------------------->
				<!-- Header: -->
				<div class="card-header text-center">
					<h3 class="card-title">Registrar Recetas</h3>
				</div>
	<!------------------------------------------------------------------------------------------------------------------------->
				<div class="card-body">
					<form class="form-center" method="POST">
						<div class="container">
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Nombre: -->
							<div class="form-group col-md-12">
								<label class="control-label">Nombre</label>
			        			<input type="text" name="nombre" id="nombre" placeholder="Nombre de la Receta" class="form-control" autofocus="">
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Tipo: -->
							<div class="form-group col-md-12">
								<label class="control-label">Tipo</label>
			        			<input type="text" name="tipo" id="tipo" placeholder="Tipo de Receta" class="form-control" autofocus="">
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Ingredientes: -->
							<div class="form-group col-md-12">
								<label class="control-label">Ingredientes</label>
			        			<input type="text" name="ingre" id="ingre" placeholder="Ingredientes" class="form-control" autofocus="">
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Preparacion: -->
							<div class="form-group col-md-12">
								<label class="control-label">Preparacion</label>
			        			<input type="text" name="prep" id="prep" placeholder="Preparacion" class="form-control" autofocus="">
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Imagen: -->
							<div class="form-group col-md-12">
								<label class="control-label">Imagen</label>
			        			<input type="text" name="img" id="img" placeholder="Puede adjuntar un link alusivo a la Receta" class="form-control" autofocus="">
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Boton Registrar -->
							<div class="card-footer text-center">
								<div class="form-group">
				        			<input type="submit" class="btn btn-lg btn-info text-white" name="Registrar" id="Registrar" value="Registrar">
				        		</div>
							</div>
						</div>
					</form>
					<?php 
					//-- PHP: --
	//--------------------------------------------------------------------------------------------------------------------------
						if (isset($_POST['Registrar']))
						{
							# code...
							//Conexion a la Base de Datos:
							$conex = mysqli_connect('localhost','root','', 'recetas');
				    		mysqli_set_charset($conex, "utf8");
    //--------------------------------------------------------------------------------------------------------------------------
				    		//Declaracion de Datos:
							$Name = trim($_POST['nombre']);
							$Tipo = trim($_POST['tipo']);
							$Ingredientes = trim($_POST['ingre']);
							$Preparacion = trim($_POST['prep']);
							$Imagen = trim($_POST['img']);
	//--------------------------------------------------------------------------------------------------------------------------
							//Inserción de Datos:
							$insertar = "INSERT INTO recetas (Nombre, Tipo, Ingredientes, Preparacion, Imagen) VALUES ('$Name','$Tipo', '$Ingredientes', '$Preparacion', '$Imagen')";
							$resultado = mysqli_query($conex, $insertar);
							if ($resultado)
							{
								# code...
								echo "Se ingresaron correctamente";

							}
							mysqli_close($conex);
						}
					?>
	<!------------------------------------------------------------------------------------------------------------------------->
					<!-- Header: -->
				<div class="card-header text-center">
					<h3 class="card-title">Busqueda de Recetas</h3>
				</div>
	<!------------------------------------------------------------------------------------------------------------------------->
					<!-- Formulario de Busqueda: -->
					<form class="form-center" method="POST">
						<div class="container">
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Busqueda por Nombre: -->
							<div class="form-group col-md-12">
								<label class="control-label">Busqueda por Nombre</label>
			        			<input type="text" name="Bnombre" id="Bnombre" placeholder="Nombre de la Receta" class="form-control" autofocus="">
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Busqueda por Tipo: -->
							<div class="form-group col-md-12">
								<label class="control-label">Busqueda por Tipo</label>
			        			<input type="text" name="Btipo" id="Btipo" placeholder="Tipo de Receta" class="form-control" autofocus="">
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
							<!-- Boton de Busqueda -->
							<div class="card-footer text-center">
								<div class="form-group">
				        			<input type="submit" class="btn btn-lg btn-info text-white" name="Buscar" id="Buscar" value="Buscar">
				        		</div>
							</div>
	<!------------------------------------------------------------------------------------------------------------------------->
						</div>
					</form>
					<?php
						error_reporting(0);
						//Conexion a la Base de Datos:
						$conex = mysqli_connect('localhost','root','', 'recetas');
						mysqli_set_charset($conex, "utf8");
	
	//--------------------------------------------------------------------------------------------------------------------------
						//Consulta:
						if (isset($_POST['Buscar']))
						{
							# code...
	//--------------------------------------------------------------------------------------------------------------------------
							//Variables para la Consulta:
							$where = "";
							$BName = trim($_POST['Bnombre']);
							$BType = trim($_POST['Btipo']);
							if (empty($_POST['Bnombre']))
							{
								# code...
								$where = "where Tipo = '" . $BType . "'";
							}
							elseif (empty($_POST['Btipo']))
							{
								# code...
								$where = "where Nombre like '" . $BName . "%'";
							}
							else
							{
								# code...
								$where = "where Nombre like '" . $BName . "%' and Tipo = '" . $BType . "'";
							}
							$Comida = "SELECT * FROM recetas $where";
						}
						
						$ResComida = $conex -> query($Comida);
					?>
	<!------------------------------------------------------------------------------------------------------------------------->
					<!-- Tabla de Resultados: -->
					<form>
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th>Nombre</th>	
									<th>Tipo</th>	
									<th>Ingredientes</th>	
									<th>Preparacion</th>	
									<th>Imagen</th>
								</tr>
							</thead>
							<?php 
								while ($RegistroReceta = $ResComida -> fetch_array(MYSQLI_BOTH)) {
									# code...
									echo "<tr>
											<td> " . $RegistroReceta['nombre'] . " </td>
											<td> " . $RegistroReceta['tipo'] . " </td>
											<td> " . $RegistroReceta['ingre'] . " </td>
											<td> " . $RegistroReceta['prep'] . " </td>
											<td> " . $RegistroReceta['img'] . " </td>
									";
								}
							?>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
						    	<?php
						    }
						    mysqli_close($conex);
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!------------------------------------------------------------------------------------------------------------------------->
</body>
</html>
<!----------------------------------------------------------------------------------------------------------------------------->
<!-- Script para ocultar o mostrar la Pass: -->
<script>
	var btn_Pass = document.getElementById('btn_Pass');
	var input = document.getElementById('Pass');
	btn_Pass.addEventListener('click', mostrarPass);
	//---------------------------------------------------------------------------------------------------------------
	function mostrarPass()
	{
		//code...
		if (input.type == "password")
		{
			input.type = "text";
			btn_Pass.src = "img/ocultar.png";
			setTimeout("ocultarPass()", 3000);
		}
		else
		{
			input.type = "password";
			btn_Pass.src = "img/mostrar.png";
		}
	}
	function ocultarPass()
	{
		input.type = "password";
		btn_Pass.src = "img/mostrar.png";
	}
</script>