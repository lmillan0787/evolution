@extends('layout.master')
@section('content')
<h3><center>FORSAGE</center></h3>
<h4><center>{{ $persona->primer_nombre }} {{ $persona->primer_apellido }}</center></h4>
<table class="u-full-width">
	<thead>
		<tr>
		<th>Id Contrato</th>
		<!-- <th>Nombre Contrato</th> -->
		<th>Nombre</th>
		<th>Apellido</th>
		{{-- <th>Upline</th> --}}
		</tr>
	</thead>
	<tbody>
		@foreach ($referidos as $referido)
		<tr>
		<td>{{$referido->id_registro}}</td>
		<td>{{$referido->primer_nombre}}</td>
		<td>{{$referido->primer_apellido}}</td>
		
@endforeach
		
		</tr>
</tbody>

</table>
@endsection