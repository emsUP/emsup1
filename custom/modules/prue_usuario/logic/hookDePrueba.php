<html lang="es">
<head>
  <title>Inserción de registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="custom/modules/juan_entregas/LogicHooks/archivo.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">

		<div class="row" style="background-color: #534d64;">
			<div class="col-md-10">
			<h4 class="alert alert-danger">Prueba juan entregas - <strong><?php echo "Desde el panel de: ".$_SESSION['estadoEntrega'].""; ?> </strong> </h4>
			</div>
			<div class="col-md-2">
				<br><center>
				<a href="index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3Djuan_entregas%26action%3DEditView%26return_module%3Djuan_entregas%26return_action%3DDetailView" class="btn btn-danger">Volver al panel</a>
				</center>
			</div>
		</div>
		
		<div class="content" style="padding: 30px !important">
			<div class="row">
				<?php
				if (!defined('sugarEntry') || !sugarEntry)
					die('No es valido');
				

				class HookClase {
					function funcionHook(&$bean, $event, $arguments) {						

						//*************************************************************************************************+//
						//********************Imprime en pantalla el registro *********************************************+//
						echo "
						<table class='table table-hover'>
						<thead>
					      <tr>
					        <th>Nombre</th>
					        <th>Fecha de entrega</th>
					        <th>Tipo de entrega</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>".$bean->nombre."</td>
						    <td>".$bean->fecha."</td>
						    <td>".$bean->tipo."</td>
						  </tr>
						</tbody>
						</table>
						<br><br>
						";
						//*************************************************************************************************+//


						//session_start(); No es necesario inicar sesion porque ya se inicio desde el suiteCRM


						//*************************************************************************************************+//
						//Crea la variable de SSESION en donde se guardara toda la informacion que se desea mostrar en el archivo de word
						$_SESSION["docword"]="
						<table style='border: solid; border-width: 2px;'>
						<thead>
					      <tr>
					        <th style='border-bottom: solid; border-right: solid; border-width: 1px;'>Nombre</th>
					        <th style='border-bottom: solid; border-right: solid; border-width: 1px;'>Fecha de entrega</th>
					        <th style='border-bottom: solid; border-right: solid; border-width: 1px;'>Tipo de entrega</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td style='border-bottom: solid; border-right: solid; border-width: 1px;'>".$bean->nombre."</td>
						    <td style='border-bottom: solid; border-right: solid; border-width: 1px;'>".$bean->fecha."</td>
						    <td style='border-bottom: solid; border-right: solid; border-width: 1px;'>".$bean->tipo."</td>
						  </tr>
						</tbody>
						</table>
						";
						//*************************************************************************************************+//

						$GLOBALS["log"]->fatal("hola etc2");
						exit();
					}
				}

				?>
			</div>
			
			<div class="row" style="padding-left: : 5%">
				<form name="proposal_form" action="reportes/reporte1.php" method="post">
					<input type="submit" name="submit_docs" value="Genrerar WORD" class="btn btn-info">					
				</form>
			</div>			

		</div>	
	</div>

	<script type="text/javascript">
		console.log("Hola desde la consola JS");
	</script>
</body>
</html>