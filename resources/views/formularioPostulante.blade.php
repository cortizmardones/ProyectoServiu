<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



<div class="container">

	<div class="row">

		<div class="col-md-2"></div>
		
		<div class="col-md-8">

				<form action="{{ url('/agregarPostulante') }}" method="POST">
					{{ csrf_field() }}
					<br><br>
					<h3 class="text-center"> <i class="fas fa-user-circle"></i> Formulario de Postulación : </h3>
					
					<br>
					<hr>
					<h5>Datos generales del postulante: </h5>
					<br>

					<label for=""><i class="fas fa-address-book"></i> Rut: </label>
					<br>
					<input type="text" class="form-control" name="rut" placeholder="Ingrese su rut sin puntos ni guión" maxlength="9" autocomplete="off" required>
					<br>

					<label for=""><i class="fas fa-address-card"></i> Primer Nombre: </label>
					<br>
					<input type="text" class="form-control" name="name" autocomplete="off" required>
					<br>

					<label for=""><i class="fas fa-address-card"></i> Segundo Nombre: </label>
					<br>
					<input type="text" class="form-control" name="name2" autocomplete="off" required>
					<br>

					<label for=""><i class="far fa-address-card"></i> Apellido Paterno: </label>
					<br>
					<input type="text" class="form-control" name="apaterno" autocomplete="off" required>
					<br>

					<label for=""><i class="far fa-address-card"></i> Apellido Materno: </label>
					<br>
					<input type="text" class="form-control" name="amaterno" autocomplete="off" required>
					<br>

					<label for=""><i class="fas fa-mobile-alt"></i> Teléfono: </label>
					<br>
					<input type="number" class="form-control" min="0" name="telefono" autocomplete="off" required>
					<br>
					<label for=""><i class="fas fa-at"></i> Email: </label>

					<br>
					<input type="email" class="form-control" name="email" autocomplete="off" required>
					<br>

					
					<label for=""> <i class="fas fa-birthday-cake"></i> Edad: </label>
					<br>
					<input type="number" name="edad" min="18" max="60" class="form-control" autocomplete="off" required>
					<br>

					<label for=""><i class="fas fa-calendar-alt"></i> Fecha de nacimiento</label>
					<br>
					<input type="date" class="form-control" name="fecha" required>
					<br>
					
					<!--Este dato viene de otra tabla / Ojo con las FK-->
					<label for=""><i class="fas fa-globe-africa"></i> Nacionalidad</label>
					<br>
					<select name="nacionalidad" id="nacionalidad" class="form-control">
						@foreach ($nacionalidades as $nacionalidad)
                    		<option class="text-center" value=" {{ $nacionalidad->id_nacionalidad }} "> {{ $nacionalidad->descripcion }}</option>
                		@endforeach
					</select>
					<br>


					<!--Este dato viene de otra tabla / Ojo con las FK-->
					<label for=""><i class="fas fa-ring"></i> Estado Civil</label>
					<br>
					<select name="estado_civil" id="estado_civil" class="form-control">
						@foreach ($estado_civil as $estado_civil)
                    	<option class="text-center" value="{{ $estado_civil->id_estado_civil }}"> {{ $estado_civil->nombre_estado_civil }}</option>
                		@endforeach
					</select>
					<br>
					
					<br>
					<br>
					<hr>
					<h5>Datos Financieros: </h5>
					<br>
					
					<!--Este dato viene de otra tabla / Ojo con las FK-->
					<label for=""><i class="fab fa-cc-mastercard"></i> Tipo Cuenta: </label>
					<br>
					<select name="tipo_cuenta" id="tipo_cuenta" class="form-control">
						@foreach ($tipo_cuenta as $tipo_cuenta)
                    	<option class="text-center" value="{{ $tipo_cuenta->id_tipo_cuenta }}"> {{ $tipo_cuenta->tipo_cuenta }}</option>
                		@endforeach
					</select>
					<br>



					<!--Esta parte la debbo agregar en el N° de cuenta-->
					<label for=""><i class="fas fa-credit-card"></i> N° Cuenta</label>
					<br>
					<input type="number" min="0" class="form-control" name="numero_cuenta" autocomplete="off" required>
					<br>
					

					<!--Este dato viene de otra tabla / Ojo con las FK-->
					<label for=""><i class="fas fa-piggy-bank"></i> Banco: </label>
					<br>
					<select name="id_banco" id="id_banco" class="form-control">
						@foreach ($banco as $banco)
                    	<option class="text-center" value="{{ $banco->id_banco }}" > {{ $banco->nombre_banco }}</option>
                		@endforeach
					</select>
					<br>

					<label for=""><i class="fas fa-dollar-sign"></i> Monto Ahorro:</label>
					<br>
					<input type="number" class="form-control" min="0" name="ahorro" autocomplete="off" required>
					<br>
					
					<label for=""><i class="fas fa-dollar-sign"></i> Sueldo Líquido:</label>
					<br>
					<input type="number" class="form-control" min="301000" name="sueldo_liquido" autocomplete="off" required>
					<br>
					

					<br>
					<br>
					<hr>
					<h5>Datos de ubicación y preferencia: </h5>
					<br>					

					<!--En esta parte debo insertar en la tabla domicilio-->
					<label for=""> <i class="fas fa-map-signs"></i> Dirección:</label>
					<br>
					<input type="text" class="form-control" name="direccion" autocomplete="off" required>
					<br>

					<label for=""><i class="far fa-compass"></i> Númeración #:</label>
					<br>
					<input type="number" class="form-control" name="numeracion" autocomplete="off" required>
					<br>

					<!--Este dato viene de otra tabla / Ojo con las FK-->
					<label for=""><i class="fas fa-building"></i> Comuna:</label>
					<br>
					<select name="id_comuna" id="id_comuna" class="form-control">

						@foreach ($comunas as $comuna)
                    	<option class="text-center" value="{{ $comuna->id_comuna }}" > {{ $comuna->nombre_comuna }}</option>
                		@endforeach

						
					</select>
					<br>
					<label for=""><i class="fas fa-city"></i> Nombre Villa o Población</label>
					<br>
					<input type="text" class="form-control" name="villa" autocomplete="off" required>
					<br>

				
					<label for=""><i class="fas fa-mail-bulk"></i> Código Postal</label>
					<br>
					<input type="number" class="form-control" min="0" name="codigo_postal" required>
					<br>


					<!--Este dato viene de otra tabla / Ojo con las FK-->
					<label for=""><i class="fas fa-users"></i> Pueblo Originario:</label>
					<br>
					<select name="pueblo_originario" id="pueblo_originario" class="form-control">
						@foreach ($pueblo_originario as $pueblo_originario)
                    	<option class="text-center" value="{{ $pueblo_originario->id_pueblo_originario }}" > {{ $pueblo_originario->nombre }}</option>
                		@endforeach
					</select>
					<br>

					
					<br>
					<br>
					<hr>
					<h5>Datos Educacionales: </h5>
					<br>					

					<!--Este dato viene de otra tabla / Ojo con las FK-->
					<label for=""><i class="fas fa-university"></i> Nivel Educacional: </label>
					<br>
					<select name="tipo_titulo" id="tipo_titulo" class="form-control">
						@foreach ($tipo_titulo as $tipo_titulo)
                    		<option class="text-center" value="{{ $pueblo_originario->id_pueblo_originario }}" > {{ $tipo_titulo->titulo }}</option>
                		@endforeach
					</select>
					<br>

					<label for=""><i class="fas fa-graduation-cap"></i> Nombre Titulo:</label>
					<br>
					<input type="text" class="form-control" name="titulo" autocomplete="off" required>
					<br>
					<button class="btn btn-success form-control"><i class="fas fa-user-plus"></i> Registrar Postulante</button>
					<hr>			
				</form>

					<a href=" {{ url('/home') }} "><button class="btn btn-Secondary form-control"><i class="fas fa-home"></i> Volver</button></a>
					<br><br><br>
		</div>

		<div class="col-md-2"></div>
	
	</div>

</div>


