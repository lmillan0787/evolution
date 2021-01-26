{{-- @extends('layout.header')
@extends('layout.footer') --}}
	<table class="default">
	<thead>
		<tr>
		<th>Id Contrato</th>
		<th>Nombre Contrato</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Upline</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($participantes as $participante)
		<tr>
		<td>{{$participante->id_registro}}</td>
		<td>{{$participante->nombre}}</td>
		<td>{{$participante->primer_nombre}}</td>
		<td>{{$participante->primer_apellido}}</td>
		@endforeach
		@foreach ($uplines as $upline)
		<td>{{ $upline->nombre }} {{ $upline->primer_apellido }} </td>

		@endforeach
		</tr>
		
	</tbody>

</table>


