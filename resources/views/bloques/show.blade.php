@extends('layout.master')
@section('content')
<h3><center>FORSAGE</center></h3>
{{-- <h4><center>{{ $persona->primer_nombre }} {{ $persona->primer_apellido }}</center></h4> --}}
<h4>Bloque {{ $bloque }}</h4>
<table class="u-full-width">
	<thead>
		<tr>
		<th>Id Contrato</th>
		<!-- <th>Nombre Contrato</th> -->
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Bloque</th>
		<th>Linea</th>
		{{-- <th>Upline</th> --}}
		</tr>
	</thead>
	<tbody>
		@foreach ($participantesBloques as $participanteBloque)
		<tr>
		<td>{{$participanteBloque->id_registro}}</td>
		<td>{{$participanteBloque->primer_nombre}}</td>
		<td>{{$participanteBloque->primer_apellido}}</td>
		<td>{{$participanteBloque->bloque_id}}</td>
		<td>{{$participanteBloque->linea_id}}</td>
		
@endforeach
		
		</tr>
</tbody>

</table>
<input type="button" class="button" onclick="history.back()"  name="volver atrás" value="Volver">
@endsection