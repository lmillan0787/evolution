@extends('layout.master')
@section('content')
<h3><center>PERSONAS</center></h3>
<a href="{{route('personas.create')}}"><button class="button-primary">Nuevo</button></a>
<table  class="u-full-width">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Pais</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($personas as $persona)
		<tr>
			<td>{{$persona->primer_nombre}}</td>
			<td>{{$persona->primer_apellido}}</td>
			<td>{{$persona->pais}}</td>
		</tr>
		@endforeach
	</tbody>
</table>




@endsection


	
