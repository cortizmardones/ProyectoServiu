<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<div class="container">
	<div class="row">
			<div class="col-md-2"></div>


			<div class="col-md-8">
				<br><br>
				<hr>

			<form action="{{ url('/formularioAsignacionCargas') }}" method="POST">
				{{ csrf_field() }}

				<h4><i class="fas fa-users"></i> Asignación de carga familiares:</h4>
				<br>
				<label><i class="fas fa-user-alt"></i> Selecciones un rut de postulante: </label>
				<br>
				<select name="rut_postulante" id="rut_postulante" class="form-control text-center">
						@foreach ($postulantes as $postulantes)
                    		<option class="text-center" value=" {{ $postulantes->rut_postulante }} "> {{ $postulantes->rut_postulante }}</option>
                		@endforeach
				</select>
				<br>

				<button id="botonMostrar" class="btn btn-primary">Agregar Carga <i class="fas fa-user-plus"></i> </button>
				<input id="botonOcultar" type="reset" class="btn btn-danger" disabled>
				<!--button id="botonOcultar" class="btn btn-danger" disabled> Eliminar Carga <i class="fas fa-user-minus"></i></button>-->
				<br>



				<!--Esta parte debo hacer que aparezca con JQUERY-->
				<div id="DATOS_CARGA_FAMILIAR" hidden="true">
					<br>
					<label><i class="fas fa-user-alt"></i>  Rut Carga Familiar</label>
					<br>
					<input id="rutCarga" name="rutCarga" type="text" class="form-control" maxlength="9" required>
					<br>
					<label><i class="fas fa-address-card"></i> Nombre: </label>
					<br>
					<input name="nombreCarga" type="text" class="form-control" required>
					<br>
					<label><i class="fas fa-address-card"></i> Apellido Paterno: </label>
					<br>
					<input name="apellidoPaternoCarga" type="text" class="form-control" required>
					<br>
					<label><i class="fas fa-address-card"></i> Apellido Materno: </label>
					<br>
					<input name="apellidoMaternoCarga" type="text" class="form-control" required>
					<br>
				
					<label><i class="fas fa-baby-carriage"></i> Tipo Carga: </label>
					<br>
					<select name="tipo_carga" id="tipo_carga" class="form-control" required>
						<option value="">Selecciones un opción</option>
						@foreach ($tipo_cargas as $tipo_cargas)
                    		<option  class="text-center" value=" {{ $tipo_cargas->id_relacion }} "> {{ $tipo_cargas->detalle }}</option>
                		@endforeach	
					</select>
					<br>
					<label><i class="fas fa-calendar-alt"></i> Fecha de nacimiento: </label>
					<input type="date" name="fechaNacimiento" class="form-control" required>
					<br>
				</div>
				

				<br><br>
				<button id="btn_enviar_formulario" class="btn btn-success form-control" disabled><i class="fas fa-user-plus"></i> Registrar Carga Familiar</button>

		</form>


		<a href=" {{ url('/home') }} "><button class="btn btn-Secondary form-control"><i class="fas fa-home"></i> Volver</button></a>
		<br>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){
	
		$('#botonMostrar').click(function(){
			$('#DATOS_CARGA_FAMILIAR').attr('hidden',false);
			$('#botonOcultar').attr('disabled',false);
			$('#botonMostrar').attr('disabled',true);
			$('#btn_enviar_formulario').attr('disabled',false);

		});

		$('#botonOcultar').click(function(){
			$('#DATOS_CARGA_FAMILIAR').attr('hidden',true);
			$('#botonMostrar').attr('disabled',false);
			$('#botonOcultar').attr('disabled',true);
			$('#btn_enviar_formulario').attr('disabled',true);
		});
		


	});


</script>
