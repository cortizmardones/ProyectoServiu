<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



<div class="container">

	<div class="row">

		<div class="col-md-2"></div>
		
		<div class="col-md-8">

				<form action="{{ url('/calculoPuntajeTotal2') }}" method="POST">
					{{ csrf_field() }}
					<br><br>
					<h3 class="text-center"><i class="fas fa-calculator"></i> Cálculo de puntajes totales: </h3>
					<hr>
					<br>
					
					<!--Este dato viene de otra tabla / Ojo con las FK-->
					<label for=""><i class="fas fa-calendar-alt"></i> Seleccione año de cálculo : </label>
					<br>
					<select name="ano" id="ano" class="form-control">
						<option value="2019">2019</option>
					</select>
					<br>
					<button class="btn btn-success form-control"><i class="fas fa-calculator"></i> Ejecutar Proceso Anual</button>
					<hr>
					
				</form>
				<a href=" {{ url('/home') }} "><button class="btn btn-Secondary form-control"><i class="fas fa-home"></i> Volver</button></a>

		</div>

		<div class="col-md-2"></div>
	
	</div>

</div>


