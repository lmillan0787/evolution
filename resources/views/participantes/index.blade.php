@extends('layout.master')
@section('content')
	<div class="row">
		<div class="one column">
			
		</div>

<table class="u-full-width">
	<thead>
		<tr>
		<th>Id Contrato</th>
		<!-- <th>Nombre Contrato</th> -->
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Upline</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($participantes as $participante)
		<tr>
		<td>{{$participante->id_registro}}</td>
		<td>{{$participante->primer_nombre}}</td>
		<td>{{$participante->primer_apellido}}</td>
		<td>{{$participante->upline_id}}</td>
		@endforeach
		
		</tr>
		
	</tbody>

</table>


	</div>
	
@endsection


