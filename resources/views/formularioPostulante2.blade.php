<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


<div class="container">
	<div class="row">
			<div class="col-md-2"></div>


			<div class="col-md-8">
				<br><br>
				<hr>
				<h4>Fomulario de postulación:</h4>
				<br>
				<label><i class="fas fa-camera"></i> Seleccione Fotografía: </label>
				<br>
				<input type="file" class="form-control">
				<br><br>


				<hr>
				<label>Datos de las cargas familiares</label>
				<br>
				<label><i class="fas fa-users"></i> Ingrese cantidad de cargas familiares</label>
				<br>
				<input type="number" min="0" max="11" class="form-control" autocomplete="off" required>
				<br>
				<button class="btn btn-success">Agregar Carga +</button>
				<br><br>

				<!--Esta parte debo hacer que aparezca con JQUERY-->
				<div class="DATOS_CARGA_FAMILIAR">
					<label>Rut Carga Familiar</label>
					<input type="number" class="form-control">
					<br>
					<label>Nombre</label>
					<br>
					<input type="text" class="form-control">
					<br>
				
					<label>Tipo Carga</label>
					<br>
					<select name="" id="" class="form-control">
						<option value="">Hijo</option>
						<option value="">Conyuge</option>
						<option value="">Nieto</option>
						<option value="">Otro</option>
					</select>
		
				</div>

				<br>
				<hr><hr>
				<label>Datos de la vivienda:</label>
				<br>
				<label>Tipo de vivienda</label>
				<br>
				<select name="" id="" class="form-control">
					<option value="">Casa</option>
					<option value="">Departamento</option>
				</select>
				<br>

				<label>Estado</label>
				<br>
				<select name="" id="" class="form-control">
					<option value="">Nueva</option>
					<option value="">Usada</option>
				</select>
				<br><br>
				<label>Región donde se ubica la vivienda</label>
				<br>
				<select name="" id="" class="form-control">
					<option value="">I de Tarapacá (Capital: Iquique)</option>
					<option value="">II de Antofagasta (Capital: Antofagasta)</option>
					<option value="">III de Atacama (Capital: Copiapó)</option>
					<option value="">IV de Coquimbo (Capital: Coquimbo)</option>
					<option value="">V de Valparaíso (Capital: Valparaíso)</option>
					<option value="">VI del Libertador General Bernardo O'Higgins (Capital: Rancagua)</option>
					<option value="">VII del Maule (Capital: Talca)</option>
					<option value="">VIII de Concepción (Capital: Concepción)</option>
					<option value="">IX de la Araucanía (Capital: Temuco)</option>
					<option value="">X de Los Lagos (Capital: Puerto Montt)</option>
					<option value="">XI de Aysén del General Carlos Ibañez del Campo (Capital: Coyhiaique)</option>
					<option value="">XII de Magallanes y de la Antártica Chilena (Capital: Punta Arenas)</option>
					<option value="">Metropolitana de Santiago (Capital:)</option>
					<option value="">XIV de Los Ríos (Capital: Valdivia)</option>
					<option value="">XV de Arica y Parinacota (Capital: Arica)</option>
					<option value="">XVI del Ñuble (Capital: Chillán)</option>
				</select>
				<br><br>
				<button class="btn btn-info form-control">Completar inscripción:</button>
				<br><br>
				<hr>

		
		

		</div>

		<div class="col-md-2"></div>
	</div>
</div>

