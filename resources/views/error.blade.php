<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



<div class="container">

	<div class="row">
		
		<div class="col-md-2"></div>
		
		<div class="col-md-8">
				
				<br><br><br>
				<h3 class="text-center">Alerta: </h3>
				

				<hr>
				@foreach ($error as $error)				
				<h3 class="text-danger text-center"><i class="fas fa-exclamation-circle"></i> {{ $error->detalle_error }} </h3>
				@endforeach
				<br>
				<a href=" {{ url('/home') }} "><button class="btn btn-outline-danger form-control"><i class="fas fa-home"></i> Volver</button></a>
				<br><br><br><br>



		</div>
	
			<div class="col-md-2"></div>
	
	</div>

</div>


