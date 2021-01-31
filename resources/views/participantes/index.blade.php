@extends('layout.master')
@section('content')
	<div class="row">
		<h3><center>{{ $nombre_contrato->nombre }} - {{ $nombre_contrato->cripto_opera }}</center></h3>
		<a href="{{ route('participantes/create',$contrato_id) }}" class="button button-primary">Nuevo</a>

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
		<td><a href="{{route('participantes/show',$participante->id_registro)}}" class="button primary-button">Detalles</a></td>
		@endforeach
		
		</tr>
		
		
	</tbody>

</table>
<input type="button" class="button" onclick="history.back()"  name="volver atrás" value="Volver">


	</div>
	
@endsection


