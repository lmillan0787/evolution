@extends('layout.master')
@section('content')
	<div class="row">
		<h3><center>INCOMATRIX</center></h3>
		<a href="{{ route('participantesInco.create') }}" class="button button-primary">Nuevo</a>

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
		<td><a href="{{route('participantesInco.show',$participante->id_registro)}}" class="button primary-button">Detalles</a></td>
		@endforeach
		
		</tr>
		
		
	</tbody>

</table>


	</div>
	
@endsection