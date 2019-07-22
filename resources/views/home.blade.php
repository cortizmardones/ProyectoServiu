
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<img src="http://www.serviuloslagos.cl/Imagenes/banner_ServiuLosLagos.jpg" class="img-thumbnail">
			<br><br>
			<h5 class="text-center"><i class="fas fa-home"></i> Home:</h5>
			<hr>
			<a href=" {{ url('/formularioPostulante') }} "><button class="btn btn-outline-dark form-control"><i class="fas fa-address-card"></i>  Formulario de registro de postulantes</button></a>
			<br><br>
			<a href=" {{ url('/asignacionPostulante') }} "><button class="btn btn-outline-dark form-control"><i class="fas fa-users"></i>  Asignación de cargas familiares</button></a>
			<br><br>
			<a href=" {{ url('/calculoPuntaje') }} "><button class="btn btn-outline-dark form-control"><i class="fas fa-male"></i>  Cálculo de puntaje único por rut</button></a>
			<br><br>
			<a href=" {{ url('/calculoPuntajeTotal') }} "><button class="btn btn-outline-dark form-control"><i class="fas fa-calculator"></i>  Cálculo de puntajes Anual</button></a>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>