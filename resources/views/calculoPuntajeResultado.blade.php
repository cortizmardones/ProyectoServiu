<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



<div class="container">

	<div class="row">

		
		<div class="col-md-12">
				
				<br><br><br>
				<hr>
				<h3 class="text-center"><i class="fas fa-align-left"></i> Tabla de resultados: </h3>
			
				<br>	

				<br>
				
				<table class="table">
					  
					  <tr class="text-center">
                    	<th>N°</th>
                    	<th>Año</th>
                    	<th>Rut</th>
                    	<th>Edad</th>
                    	<th>Punt. Edad</th>
                    	<th>Cantidad de cargas</th>
                    	<th>Punt. cargas</th>
                    	<th>Estado Civil</th>
                    	<th>Punt. estado civil</th>
                    	<th>Pueblo Originario</th>
                    	<th>Punt. pueblo originario</th>
                    	<th>Monto ahorro</th>
                    	<th>Punt. Monto ahorro</th>
                    	<th>Punt. Titulo</th>
                    	<th>PUNT. TOTAL</th>
					  </tr>

				<!--@foreach ($proceso as $proceso)-->
					  <tr class="text-center">		
							<td>{{ $proceso->id_proceso }}</td>
						    <td>{{ $proceso->ano }}</td>
						    <td>{{ $proceso->rut_postulante }}</td>

						    <td>{{ $proceso->edad }}</td>
						    <td>{{ $proceso->puntaje_edad }}</td>
						    
						    <td>{{ $proceso->cantidad_cargas }}</td>
						    <td>{{ $proceso->puntaje_carga }}</td>

						    <td>{{ $proceso->estado_civil }}</td>
						    <td>{{ $proceso->puntaje_estado_civil }}</td>

						    <td>{{ $proceso->pueblo_indigena }}</td>
						    <td>{{ $proceso->puntaje_pueblo_indigena }}</td>

						    <td>{{ $proceso->monto_ahorro }}</td>
						    <td>{{ $proceso->puntaje_monto_ahorro }}</td>

						    <td>{{ $proceso->puntaje_titulo }}</td>
						    <td>{{ $proceso->total_puntaje }}</td>
					  </tr>
				<!--@endforeach-->
					
				</table>
					
		
				<br>
				<a href=" {{ url('/home') }} "><button class="btn btn-Secondary form-control"><i class="fas fa-home"></i> Volver</button></a>
				<br><br><br><br>



		</div>

	
	</div>

</div>


