<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Rescata una Mascota</title>
  <!--------------LINKS A RECURSOS---------------------->
  <!-- LINKS A BOOTSTRAP CORE CSS -->
	
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- LINKS A HOJA DE ESTILOS -->
  <link href="../css/reuma.css" rel="stylesheet">
  <!-- LINK DE ESTILO DE LA LETRA -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- LINKS A JAVASCRIPT REMOTO PARA LOS GRAFICOS DE INFORMACION -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
	// ACTIVAR TOOLTIP
	$('[data-toggle="tooltip"]').tooltip();
	
	// ACTIVAR / DESACTIVAR CHECKBOXES
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body class="color-fondo">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top color-poli">
    <div class="container">
      <a class="navbar-brand" href="../index.html"><img src="../images/logo-horizontal-white.png" width="107" height="35" alt="Rescata una mascota" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="administrador_usuarios.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mascotas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Fundaciones</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Soporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
          </li>
          <li class="nav-item">
   
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <header> 
  </header>

  <div class="container">
    <h1 class="my-4 text-poli">Administrador de Fundaciones</h1>
    <hr>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Fundaciones</li>
    </ol>
</div>
		<!-- MODAL AGREGAR -->
	<div id="addEmployeeModal" class="modal fade">
	  <div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">AGREGAR USUARIO</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- MODAL EDITAR -->
<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">EDITAR USUARIO</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--MODAL DE BORRAR -->
	<blockquote>&nbsp;</blockquote>
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">ELIMINAR EMPLEADO</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Estas seguro que desea borrar este registro?</p>
						<p class="text-warning"><small>Esto no se puede deshacer.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
  <footer class="py-5 bg-dark color-poli">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Rescata una Mascota</p>
    </div>
  </footer>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>new Chart(document.getElementById("chartjs-4"),{"type":"doughnut","data":{"labels":["Perros","Otros","Gatos"],"datasets":[{"label":"My First Dataset","data":[300,50,100],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});</script>
</body>
</html>
